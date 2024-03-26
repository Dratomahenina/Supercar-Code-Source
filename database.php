<?php

$host = "mysql-kim.alwaysdata.net";
$dbname = "kim_supercar";
$username = "kim";
$password = "Pazerty11";

$mysqli = new mysqli($host, $username, $password, $dbname);
                                          
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>