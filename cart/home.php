<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<div class="product">
  <h3>Product 1</h3>
  <p>Product 1 Description</p>
  <img src="product1.jpg" alt="Product 1">
  <button class="add-to-cart" data-id="1" data-name="Product 1" data-price="10.99">Add to Cart</button>
</div>

<div class="product">
  <h3>Product 2</h3>
  <p>Product 2 Description</p>
  <img src="product2.jpg" alt="Product 2">
  <button class="add-to-cart" data-id="2" data-name="Product 2" data-price="15.99">Add to Cart</button>
</div>

<div class="cart">
  <h3>Shopping Cart</h3>
  <ul id="cart-items">
    <!-- Cart items will be dynamically added here -->
  </ul>
  <p>Total: <span id="cart-total">$0.00</span></p>
</div>

    <script src="script.js"></script>
</body>
</html>