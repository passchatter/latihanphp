<?php

$host = "localhost";
$db = "nadiashop";
$user = "root";
$password = "root";

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>