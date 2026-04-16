<?php

require_once __DIR__ . '/../models/ContactModel.php';

class ContactController {

    public function list() {

        $model = new ContactModel();
        $contacts = $model->getAllContacts();

        require __DIR__ . '/../views/AccueilView.php';
    }

    public function add() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $firstname = $_POST['firstname'] ?? '';
            $lastname  = $_POST['lastname'] ?? '';
            $mail      = $_POST['mail'] ?? '';
            $number    = $_POST['number'] ?? '';

            if (!empty($firstname) && !empty($lastname) && !empty($mail) && !empty($number)) {

                $model = new ContactModel();

                if ($model->addContact($firstname, $lastname, $mail, $number)) {
                    header("Location: index.php?page=contacts");
                    exit;
                } else {
                    echo "Erreur insertion contact";
                }

            } else {
                echo "Champs manquants";
            }
        }
    }

    public function edit() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_POST['id'] ?? null;
        $firstname = $_POST['firstname'] ?? '';
        $lastname  = $_POST['lastname'] ?? '';
        $mail      = $_POST['mail'] ?? '';
        $number    = $_POST['number'] ?? '';

        if ($id && $firstname && $lastname && $mail && $number) {

            $model = new ContactModel();

            if ($model->updateContact($id, $firstname, $lastname, $mail, $number)) {
                header("Location: index.php?page=contacts");
                exit;
            } else {
                echo "Erreur mise à jour";
            }

        } else {
            echo "Champs manquants";
        }
    }
}
}