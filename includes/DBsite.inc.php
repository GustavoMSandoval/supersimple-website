<?php 

// Objectives of the project , connection with SQL , register of products and clients

$dsn = "mysql:host=localhost:3307;dbname=servicesdb";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername ,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}