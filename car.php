<div class="cart-items">
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

    // Fetch cart items from the database
    $sql = "SELECT * FROM cart";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Display cart item
            echo '<div class="cart-item">';
            echo '<h4>Product ' . $row["product_id"] . '</h4>';
            // You can also display the product details and image here
            echo '</div>';
        }
    } else {
        echo "Your cart is empty.";
    }

    $conn->close();
  ?>
</div>