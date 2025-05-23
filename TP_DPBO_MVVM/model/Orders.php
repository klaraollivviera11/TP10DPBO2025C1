<?php
require_once 'config/Database.php';

class Orders {
    private $conn;
    private $table = 'orders';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT o.*, c.name as customer_name, sm.method_name as shipping_method_name 
                    FROM " . $this->table . " o 
                    JOIN customer c ON o.customer_id = c.id 
                    JOIN shipping_method sm ON o.shipping_method_id = sm.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT o.*, c.name as customer_name, sm.method_name as shipping_method_name 
                    FROM " . $this->table . " o 
                    JOIN customer c ON o.customer_id = c.id 
                    JOIN shipping_method sm ON o.shipping_method_id = sm.id 
                    WHERE o.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($order_number, $customer_id, $shipping_method_id) {
        $query = "INSERT INTO " . $this->table . " (order_number, customer_id, shipping_method_id) VALUES (:order_number, :customer_id, :shipping_method_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':order_number', $order_number);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->bindParam(':shipping_method_id', $shipping_method_id);
        return $stmt->execute();
    }

    public function update($id, $order_number, $customer_id, $shipping_method_id) {
        $query = "UPDATE " . $this->table . " SET order_number = :order_number, customer_id = :customer_id, shipping_method_id = :shipping_method_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':order_number', $order_number);
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->bindParam(':shipping_method_id', $shipping_method_id);
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