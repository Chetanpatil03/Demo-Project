<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'EcoPrime_DB';



$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $username = $_POST['username'];

    $stmt = $conn->prepare("INSERT INTO products (name, price, description, username) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $name, $price, $description, $username);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

header('Location: index.php');
exit();
?>
