<?php
require_once 'viewmodel/OrdersViewModel.php';
require_once 'viewmodel/CustomerViewModel.php';
require_once 'viewmodel/ShippingViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'orders';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'orders') {
    $viewModel = new OrdersViewModel();
    if ($action == 'list') {
        $ordersList = $viewModel->getOrdersList();
        require_once 'views/orders_list.php';
    } elseif ($action == 'add') {
        $customer = $viewModel->getCustomer();
        $shipping = $viewModel->getShipping();
        require_once 'views/orders_form.php';
    } elseif ($action == 'edit') {
        $orders = $viewModel->getOrdersById($_GET['id']);
        $customer = $viewModel->getCustomer();
        $shipping = $viewModel->getShipping();
        require_once 'views/orders_form.php';
    } elseif ($action == 'save') {
        $viewModel->addOrders($_POST['order_number'], $_POST['customer_id'], $_POST['shipping_method_id']);
        header('Location: index.php?entity=orders');
    } elseif ($action == 'update') {
        $viewModel->updateOrders($_GET['id'], $_POST['order_number'], $_POST['customer_id'], $_POST['shipping_method_id']);
        header('Location: index.php?entity=orders');
    } elseif ($action == 'delete') {
        $viewModel->deleteOrders($_GET['id']);
        header('Location: index.php?entity=orders');
    }
} elseif ($entity == 'customer') {
    $viewModel = new CustomerViewModel();
    if ($action == 'list') {
        $customerList = $viewModel->getCustomerList();
        require_once 'views/customer_list.php';
    } elseif ($action == 'add') {
        require_once 'views/customer_form.php';
    } elseif ($action == 'edit') {
        $customer = $viewModel->getCustomerById($_GET['id']);
        require_once 'views/customer_form.php';
    } elseif ($action == 'save') {
        $viewModel->addCustomer($_POST['name']);
        header('Location: index.php?entity=customer');
    } elseif ($action == 'update') {
        $viewModel->updateCustomer($_GET['id'], $_POST['name']);
        header('Location: index.php?entity=customer');
    } elseif ($action == 'delete') {
        $viewModel->deleteCustomer($_GET['id']);
        header('Location: index.php?entity=customer');
    }
} elseif ($entity == 'shipping') {
    $viewModel = new ShippingViewModel();
    if ($action == 'list') {
        $shippingList = $viewModel->getShippingList();
        require_once 'views/shipping_list.php';
    } elseif ($action == 'add') {
        require_once 'views/shipping_form.php';
    } elseif ($action == 'edit') {
        $shipping = $viewModel->getShippingById($_GET['id']);
        require_once 'views/shipping_form.php';
    } elseif ($action == 'save') {
        $viewModel->addShipping($_POST['method_name']);
        header('Location: index.php?entity=shipping');
    } elseif ($action == 'update') {
        $viewModel->updateShipping($_GET['id'], $_POST['method_name']);
        header('Location: index.php?entity=shipping');
    } elseif ($action == 'delete') {
        $viewModel->deleteShipping($_GET['id']);
        header('Location: index.php?entity=shipping');
    }
}
?>
