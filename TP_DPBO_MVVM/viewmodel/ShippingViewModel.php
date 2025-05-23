<?php
require_once 'model/Shipping.php';

class ShippingViewModel {
    private $shipping;

    public function __construct() {
        $this->shipping = new Shipping();
    }

    public function getShippingList() {
        return $this->shipping->getAll();
    }

    public function getShippingById($id) {
        return $this->shipping->getById($id);
    }

    public function addShipping($method_name) {
        return $this->shipping->create($method_name);
    }

    public function updateShipping($id, $method_name) {
        return $this->shipping->update($id, $method_name);
    }

    public function deleteShipping($id) {
        return $this->shipping->delete($id);
    }
}
?>