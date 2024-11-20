<?php

require_once 'app/controllers/MembersController.php';
require_once 'app/controllers/TrainersController.php';
require_once 'app/controllers/WorkoutClassController.php';
require_once 'app/controllers/AttendanceController.php';

require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/TemplateController.php';

$memberController = new MembersController();
$trainersController = new TrainersController();
$template = new TemplateController();
$workout = new WorkoutClassController();
$attendanceController = new AttendanceController();
$template->header();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
// untuk members
if ($url == '/') { 
    new HomeController();
} else if ($url == '/members/index' || $url == '/members') {
    $memberController->index();
} elseif ($url == '/trainers/index' || $url == '/trainers') {
    $trainersController->index();
} elseif ($url == '/WorkoutClass/index' || $url == '/WorkoutClass') {
    $workout->index();
} elseif ($url == '/attendance/index' || $url == '/attendance') {
    $attendanceController->index();
} elseif ($url == '/members/create' && $requestMethod == 'GET') {
    $memberController->create();
} elseif ($url == '/trainers/create' && $requestMethod == 'GET') {
    $trainersController->create();
} elseif ($url == '/WorkoutClass/create' && $requestMethod == 'GET') {
    $workout->create();
} elseif ($url == '/attendance/create' && $requestMethod == 'GET') {
    $attendanceController->create();
} elseif ($url == '/members/store' && $requestMethod == 'POST') {
    $memberController->store();
} elseif ($url == '/trainers/store' && $requestMethod == 'POST') {
    $trainersController->store();
} elseif ($url == '/WorkoutClass/store' && $requestMethod == 'POST') {
    $workout->store();
} elseif ($url == '/attendance/store' && $requestMethod == 'POST') {
    $attendanceController->store();
} elseif (preg_match('/\/members\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $membersId = $matches[1];
    $memberController->edit($membersId);
} elseif (preg_match('/\/trainers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_pelatih = $matches[1];
    $trainersController->edit($id_pelatih);
} elseif (preg_match('/\/WorkoutClass\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $workoutid = $matches[1];
    $workout->edit($workoutid);
} elseif (preg_match('/\/attendance\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $attendanceId = $matches[1];
    $attendanceController->edit($attendanceId);
} elseif (preg_match('/\/members\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $membersId = $matches[1];
    $memberController->update($membersId, $_POST);
}  elseif (preg_match('/\/trainers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $id_pelatih = $matches[1];
    $trainersController->update($id_pelatih, $_POST);
} elseif (preg_match('/\/WorkoutClass\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $workoutid = $matches[1];
    $workout->update($workoutid, $_POST);
} elseif (preg_match('/\/attendance\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $attendanceId = $matches[1];
    $attendanceController->update($attendanceId, $_POST);
} elseif (preg_match('/\/members\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $membersId = $matches[1];
    $memberController->delete($membersId);
} elseif (preg_match('/\/trainers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $id_pelatih = $matches[1];
    $trainersController->delete($id_pelatih);
} elseif (preg_match('/\/WorkoutClass\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $workoutid = $matches[1];
    $workout->delete($workoutid);
} elseif (preg_match('/\/attendance\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $attendanceId = $matches[1];
    $attendanceController->delete($attendanceId);
}   else {
    http_response_code(404);
    echo "404 Not Found";
}
$template->footer();