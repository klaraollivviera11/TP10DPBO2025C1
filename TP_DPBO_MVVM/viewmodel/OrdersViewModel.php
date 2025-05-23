<?php
require_once 'model/Orders.php';
require_once 'model/Customer.php';
require_once 'model/Shipping.php';

class OrdersViewModel {
    private $orders;
    private $customer;
    private $shipping;

    public function __construct() {
        $this->orders = new Orders();
        $this->customer = new Customer();
        $this->shipping = new Shipping();
    }

    public function getOrdersList() {
        return $this->orders->getAll();
    }

    public function getOrdersById($id) {
        return $this->orders->getById($id);
    }

    public function getCustomer() {
        return $this->customer->getAll();
    }

    public function getShipping() {
        return $this->shipping->getAll();
    }

    public function addOrders($order_number, $customer_id, $shipping_method_id) {
        return $this->orders->create($order_number, $customer_id, $shipping_method_id);
    }

    public function updateOrders($id, $order_number, $customer_id, $shipping_method_id) {
        return $this->orders->update($id, $order_number, $customer_id, $shipping_method_id);
    }

    public function deleteOrders($id) {
        return $this->orders->delete($id);
    }
}
?>