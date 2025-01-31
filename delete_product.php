<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'EcoPrime_DB';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

$conn->close();

header('Location: index.php');
exit();
?>
