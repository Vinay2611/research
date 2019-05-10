<?php

//Check connection
$host = 'localhost';
$user = 'vinayj';
$pass = 'wTJxkCOA1ioJYZWb';
$database = 'test';

$db = new mysqli( $host, $user, $pass, $database);

if ( $db->connect_error ){
    die('Connection failed: ' . $db->connect_error);
}

echo '<pre>';
print_r($db);

