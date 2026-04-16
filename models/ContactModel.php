<?php
require_once __DIR__ . '/../config/config.php';

class ContactModel {

    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function addContact($firstname, $lastname, $mail, $number) {

        $sql = "INSERT INTO contact (firstname, lastname, mail, number)
                VALUES (:firstname, :lastname, :mail, :number)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'mail' => $mail,
            'number' => $number
        ]);
    }

    public function getAllContacts() {

        $sql = "SELECT * FROM contact ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateContact($id, $firstname, $lastname, $mail, $number) {

    $sql = "UPDATE contact 
            SET firstname = :firstname,
                lastname = :lastname,
                mail = :mail,
                number = :number
            WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    return $stmt->execute([
        'id' => $id,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'mail' => $mail,
        'number' => $number
    ]);
}
    public function deleteContact($id) {

    $sql = "DELETE FROM contact WHERE id = :id";
    $stmt = $this->pdo->prepare($sql);

    return $stmt->execute([
        'id' => $id
    ]);
}
}