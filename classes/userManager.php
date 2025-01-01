<?php
require_once "./database.php";

class userManager
{

    public function addClient($client){

        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO users(name, email, pass) VALUES (:name, :email, :pass)");
        $stmt->execute([
            ':name' => $client->getName(),
            ':email' => $client->getEmail(),
            ':pass' => $client->getPass(),

        ]);

    }

}