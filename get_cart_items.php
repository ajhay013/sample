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

// Retrieve cart items
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="cart-item">';
        echo '<img src="' . $row['image'] . '" alt="' . $row['product_name'] . '">';
        echo '<div>';
        echo '<h4>' . $row['product_name'] . '</h4>';
        echo '<p>Price: $' . $row['product_price'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No items in the cart.';
}

$conn->close();
?>
