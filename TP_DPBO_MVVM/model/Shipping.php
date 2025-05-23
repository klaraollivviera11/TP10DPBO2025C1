<?php
require_once 'config/Database.php';

class Shipping {
    private $conn;
    private $table = 'shipping_method';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($method_name) {
        $query = "INSERT INTO " . $this->table . " (method_name) VALUES (:method_name)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':method_name', $method_name);
        return $stmt->execute();
    }

    public function update($id, $method_name) {
        $query = "UPDATE " . $this->table . " SET method_name = :method_name WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':method_name', $method_name);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>