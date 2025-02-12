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
  <h3>Product 1</h3>asdasdasdsadsad
  <p>Price: $10.99</p>
  <img src="product1.jpg" alt="Product 1">
  <button class="add-to-cart" data-name="Product 1" data-price="10.99" data-image="product1.jpg">Add to Cart</button>
</div>
asdasd
<div class="product">
  <h3>SADHASJDHSAJDSAJ AJSHDAJSHDASJDHJAS HD</h3>
  <p>Price: $15.99</p>
  <img src="product2.jpg" alt="Product 2">
  <button class="add-to-cart" data-name="Product 2" data-price="15.99" data-image="product2.jpg">Add to Cart</button>
</div>

<button id="view-cart">View Cart</button>

<div id="cart-items"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var cartItems = [];

    $('.add-to-cart').click(function() {
      var productName = $(this).data('name');
      var productPrice = $(this).data('product_price');
      var productImage = $(this).data('image');

      cartItems.push({ product_name: productName, product_price: productPrice, image: productImage });

      // Send cart item to the server
      $.ajax({
        url: 'add_to_cart.php',
        method: 'POST',
        data: { product_name: productName, product_price: productPrice, image: productImage },
        success: function(response) {
          console.log('Cart item added to database.');
        },
        error: function(xhr, status, error) {
          console.log('Error: ' + error);
        }
      });

      alert('Product added to cart!');
    });

    $('#view-cart').click(function() {
      $.ajax({
        url: 'get_cart_items.php',
        method: 'GET',
        success: function(response) {
          $('#cart-items').html(response);
        },
        error: function(xhr, status, error) {
          console.log('Error: ' + error);
        }
      });
    });
  });
</script>




</body>
</html>