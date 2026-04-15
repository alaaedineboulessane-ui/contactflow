<?php

$page = $_GET['page'] ?? 'home';

require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/ContactController.php'; 

switch ($page) {

    case 'register':
        $controller = new AuthController();
        $controller->register();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;

    case 'contacts':
        $controller = new ContactController();
        $controller->list();
        break;

    case 'contact_add':
        $controller = new ContactController();
        $controller->add();
        break;

    default:
        $controller = new HomeController();
        $controller->showHome();
        break;
}