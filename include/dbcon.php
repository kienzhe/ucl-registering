<?php 
session_start();
$host = "kienzhe.dk.mysql";
$username = "username";
$password = "password";
$database = "database";
$dbCon = new mysqli($host, $username, $password, $database);
$dbCon->set_charset("utf8");
if ($dbCon->connect_error) { 
    die('NO CON TO DB (' . $dbCon->errno . ') ' . $dbCon->connect_error); 
}
?>