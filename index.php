<?php
require 'controller/productController.php';

$action = $_GET['action'] ?? 'list';
switch ($action) {
    case 'list':
        listProducts();
        break;
    case 'add':
        addProduct();
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            deleteProduct($id);
        }
        header('Location: index.php');
        break;
    default:
        echo "Invalid action.";
}
