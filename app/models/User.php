<?php
class User {
    private $conn;
    private $table = 'pengguna';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function findUserByName($nama) {
        $query = "SELECT * FROM $this->table WHERE nama = :nama";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($nama, $password) {
        $query = "INSERT INTO $this->table (nama, password) VALUES (:nama, :password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
}
