<?php

set_include_path(__DIR__);

include_once 'model/Cost.class.php';
include_once 'model/Credit.class.php';
include_once 'model/Mission.class.php';
include_once 'model/Service.class.php';
include_once 'model/User.class.php';
include_once 'controller/HomeController.class.php';
include_once 'controller/CostsController.class.php';
include_once 'controller/MissionsController.class.php';
include_once 'controller/UsersController.class.php';

$homeController = new HomeController();
$costsController = new CostsController();
$missionsController = new MissionsController();
$usersController = new UsersController();

session_start();
if(!isset($_SESSION["login"])){
    if (isset($_GET['action']) && $_GET['action'] == 'signUp') {
        $usersController->addUser();
    } else {
        $usersController->index();
    }
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'login':
            $homeController->index();
            break;
        case 'countability':
            break;
        case 'viewMissions':
            break;
        case 'viewMission':
            break;
        case 'endMission':
            break;
        case 'updateMission':
            break;
        case 'deleteMission':
            break;
        case 'addMission':
            break;
        case 'addOperation':
            break;
        case 'viewCosts':
            break;
        case 'logout':
            $_SESSION = array();
            session_destroy();
            $usersController->index();
            break;
        default:
            $homeController->index();
            break;
    }
} else {
    $homeController->index();
}

?>