<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/latihanphp/backend/index.php/api/read': // sesuaikan dengan path lengkap
        require __DIR__ . '/api/read.php';
        break;
    default:
        http_response_code(404);
        echo json_encode(["message" => "Endpoint tidak ditemukan."]);
        break;
}
