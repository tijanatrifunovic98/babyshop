<?php

require 'vendor/autoload.php';
require 'jsonindent.php';

Flight::register('db', 'Database', array('babyshop'));
$json_podaci = file_get_contents("php://input");
Flight::set('json_podaci', $json_podaci );


Flight::route('/', function(){
    echo 'Welcome to BabyShop!';
});
Flight::start();
?>