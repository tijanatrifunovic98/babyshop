<?php
class Database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname;
    private $dblink; //veza sa bazom
    private $result; //rezultat upita
    private $records; //broj vracenih elemenata
    private $affected; //broj izmenjenih redova

    function __construct($dbname)
    {
        $this->dbname = $dbname;
        $this->Connect();
    }
    public function getResult()
    {
        return $this->result;
    }
    public function getRecords()
    {
        return $this->records;
    }

    function Connect()
    {
        $this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if ($this->dblink->connect_errno) {
           // printf("Neuspesno konektovanje na bazu: %s\n", $mysqli->connect_error);
            exit();
        }
        $this->dblink->set_charset("utf8");
    }

    function select($table, $rows, $where)
    {
        $q = "select" . $rows . " from " . $table;
        if ($where != null) {
            $q .= " WHERE " . $where;
        }
        $this->ExecuteQuery($q);
    }

    function insert($table, $rows, $values)
    {
        $query_values = implode(',', $values);
        $insert = 'INSERT INTO ' . $table;
        if ($rows != null) {
            $insert .= ' (' . $rows . ')';
        }
        $insert .= ' VALUES (' . $query_values . ')';
        if ($this->ExecuteQuery($insert))
            return true;
        else return false;
    }

    function delete($table,  $key, $value)
    {
        $delete = "DELETE FROM " . $table . " WHERE " . $key . " = '" . $value . "'";
        if ($this->ExecuteQuery($delete))
            return true;
        else return false;
    }


    function ExecuteQuery($query)
    {
        if ($this->result = $this->dblink->query($query)) {
            if (isset($this->result->num_rows)) $this->records         = $this->result->num_rows;
            if (isset($this->dblink->affected_rows)) $this->affected        = $this->dblink->affected_rows;
            return true;
        } else {
            return false;
        }
    }
    function close()
    {
        $this->dblink->close();
    }
}
