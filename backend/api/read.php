<?php

include '../config/database.php';

$sql = "SELECT * FROM deskripsi";
$result = $conn->query($sql);
$data = [];
while($row = $result->fetch_assoc()){
    $data [] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);


?>