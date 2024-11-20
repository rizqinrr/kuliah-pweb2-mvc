<?php
// routes.php

require_once 'app/controllers/TrainersController.php';

$controller = new TrainersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/trainers/index' || $url == '/') {
    $controller->index();
} elseif ($url == '/trainers/create' && $requestMethod == 'GET') {
    $controller->create();
} elseif ($url == '/trainers/store' && $requestMethod == 'POST') {
    $controller->store();
} elseif (preg_match('/\/trainers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_pelatih = $matches[1];
    $controller->edit($id_pelatih);
} elseif (preg_match('/\/trainers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $id_pelatih = $matches[1];
    $controller->update($id_pelatih, $_POST);
} elseif (preg_match('/\/trainers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_pelatih = $matches[1];
    $controller->delete($id_pelatih);
} else {
    http_response_code(404);
    echo "404 Not Found";
}