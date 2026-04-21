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

    case 'contact_edit':
        $controller = new ContactController();
        $controller->edit();
        break;

    case 'contact_delete':
        $controller = new ContactController();
        $controller -> delete();
        break;

    case 'contact_favorite':
        $controller = new ContactController();
        $controller->favorite();
        break;

    case 'favorites':
        $controller = new ContactController();
        $controller->favorites();
        break;

    default:
        $controller = new HomeController();
        $controller->showHome();
        break;

}