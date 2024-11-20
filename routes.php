<?php

require_once 'app/controllers/MembersController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/TemplateController.php';

$memberController = new MembersController();
$userController = new UserController();
$template = new TemplateController();
$template->header();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
// untuk members
if ($url == '/') { 
    new HomeController();
} else if ($url == '/members' || $url == '/members/index') {
    $memberController->index();
} elseif ($url == '/user/index' || $url == '/user') {
    $userController->index();
} elseif ($url == '/members/create' && $requestMethod == 'GET') {
    $memberController->create();
} elseif ($url == '/user/create' && $requestMethod == 'GET') {
    $userController->create();
} elseif ($url == '/members/store' && $requestMethod == 'POST') {
    $memberController->store();
} elseif ($url == '/user/store' && $requestMethod == 'POST') {
    $userController->store();
} elseif (preg_match('/\/members\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $membersId = $matches[1];
    $memberController->edit($membersId);
}  elseif (preg_match('/\/user\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->edit($userId);
}  elseif (preg_match('/\/members\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $membersId = $matches[1];
    $memberController->update($membersId, $_POST);
} elseif (preg_match('/\/user\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $userController->update($userId, $_POST);
} elseif (preg_match('/\/members\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $membersId = $matches[1];
    $memberController->delete($membersId);
} elseif (preg_match('/\/user\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $userController->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
$template->footer();