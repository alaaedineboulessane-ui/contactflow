<?php

require_once __DIR__ . '/ContactController.php';

class HomeController {

    public function showHome() {
        $contactController = new ContactController();
        $contactController->list();
    }
}