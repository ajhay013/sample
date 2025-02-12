<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve cart items
$sql = "SELECT * FROM cart_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="cart-item">';
        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
        echo '<div>';
        echo '<h4>' . $row['name'] . '</h4>';
        echo '<p>Price: $' . $row['price'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No items in the cart.';
}

$conn->close();
?>
