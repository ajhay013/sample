<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appliance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['image'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO cart (product_name, product_price, image) VALUES ('$name', $price, '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
