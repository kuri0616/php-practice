<?php
namespace api;

require 'HelloApiService.php';
echo '<pre>';
var_dump($_SERVER['REQUEST_URI']);
echo '</pre>';
$helloApiService = new HelloApiService();

list($statusCode, $res) = $helloApiService->getHelloMessage();

http_response_code($statusCode);
header('Content-Type: application/json; charset=UTF-8');

echo json_encode($res, JSON_UNESCAPED_UNICODE);




