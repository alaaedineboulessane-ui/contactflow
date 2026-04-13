<?php
$page = $_GET['page'] ?? 'home';

if ($page === 'register') {
    require_once 'controllers/AuthController.php';
    $controller = new AuthController();
    $controller->register();
} elseif ($page === 'login') {
    require_once 'controllers/AuthController.php';
    $controller = new AuthController();
    $controller->login();
} else {
    require_once 'controllers/HomeController.php';
    $controller = new HomeController();
    $controller->showHome();
}