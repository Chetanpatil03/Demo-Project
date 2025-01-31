<?php

session_start();

include("connection.php");
include("function.php");

$user_data = check_login($conn);
$_SESSION['id'] = $user_data['id'] ;
$_SESSION['username'] = $user_data['username'] ; 
$username = $_SESSION['username'];

echo $user;



$host = 'localhost';
$user = 'root';
$password = '';
$db = 'EcoPrime_DB';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE username = '$username'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Management</title>
</head>
<body>
    <div class="container">
        <h1>Product Management</h1>
        <div id="right">
        <a href="logout.php">LOGOUT</a>
        </div>
        <form id="product-form" action="add_product.php" method="POST">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="number" name="price" placeholder="Price" step="0.01" required>
            <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Add Product</button>
        </form>

        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="product-list">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr data-id="<?php echo $row['id']; ?>">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
