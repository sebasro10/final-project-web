<?php

set_include_path(__DIR__);

include_once 'model/Citation.class.php';
include_once 'model/Author.class.php';
include_once 'model/User.class.php';
include_once 'controller/HomeController.class.php';
include_once 'controller/CitationsController.class.php';
include_once 'controller/UsersController.class.php';

$homeController = new HomeController();
$citationsController = new CitationsController();
$usersController = new UsersController();

session_start();
if(!isset($_SESSION["login"])){
    if (isset($_GET['action']) && $_GET['action'] == 'inscription') {
        $usersController->addUser();
    } else {
        $usersController->index();
    }
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'viewCitations':
            $citationsController->index();
            break;
        case 'viewCitation':
            $citationsController->viewCitation();
            break;
        case 'addCitation':
            $citationsController->addCitation();
            break;
        case 'home':
            $homeController->index();
            break;
        case 'logout':
            $_SESSION = array();
            session_destroy();
            $usersController->index();
            break;
        default:
            $usersController->index();
            break;
    }
} else {
    $homeController->index();
}

?>