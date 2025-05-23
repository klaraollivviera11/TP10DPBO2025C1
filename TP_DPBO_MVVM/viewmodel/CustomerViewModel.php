<?php
require_once 'model/Customer.php';

class CustomerViewModel {
    private $customer;

    public function __construct() {
        $this->customer = new Customer();
    }

    public function getCustomerList() {
        return $this->customer->getAll();
    }

    public function getCustomerById($id) {
        return $this->customer->getById($id);
    }

    public function addCustomer($name) {
        return $this->customer->create($name);
    }

    public function updateCustomer($id, $name) {
        return $this->customer->update($id, $name);
    }

    public function deleteCustomer($id) {
        return $this->customer->delete($id);
    }
}
?>