<?php
require 'model/products.php';

function listProducts() {
    $products = getProducts();
    include 'view/DisplayProducts.php';
}

function addProduct() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $price = (float)$_POST['price'];
        $description = $_POST['description'];
        addProductToDatabase($name, $price, $description);
        header('Location: index.php');
    } else {
        include 'view/AddProduct.php';
    }
}

function deleteProduct($id) {
    deleteProductFromDatabase($id);
}
