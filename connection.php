<?php
    $mysqli_server="localhost";
    $mysqli_user="root";
    $mysql_password = "";
    $mysql_db = "babyshop";
    $mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
    if ($mysqli->connect_errno) {
        printf("Konekcija sa bazom nije uspesno: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->set_charset("utf8");


?>