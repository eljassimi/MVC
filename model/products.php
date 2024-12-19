<?php
require 'config.php';

function getProducts() {
    $conn = getDbConnection();
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $products = [];

    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    $conn->close();
    return $products;
}

function addProductToDatabase($name, $price, $description) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function deleteProductFromDatabase($id) {
    $conn = getDbConnection();
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
