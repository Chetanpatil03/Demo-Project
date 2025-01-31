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
$sql = "SELECT * FROM products WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $updateStmt = $conn->prepare("UPDATE products SET name=?, price=?, description=? WHERE id=?");
    $updateStmt->bind_param("sdsi", $name, $price, $description, $id);
    $updateStmt->execute();
    $updateStmt->close();

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Product</title>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="" method="POST">
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required>
            <textarea name="description"><?php echo $product['description']; ?></textarea>
            <button type="submit">Update Product</button>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
