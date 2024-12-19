<?php
function getDbConnection() {
    $conn = new mysqli('localhost', 'root', '', 'mvc');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
