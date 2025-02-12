// Get the add to cart buttons
var addToCartButtons = document.querySelectorAll('.add-to-cart');

// Get the cart items ul
var cartItemsList = document.getElementById('cart-items');

// Get the cart total element
var cartTotal = document.getElementById('cart-total');

// Attach event listeners to add to cart buttons
addToCartButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var productID = this.getAttribute('data-id');
    var productName = this.getAttribute('data-name');
    var productPrice = parseFloat(this.getAttribute('data-price'));

    // Create a new cart item element
    var cartItem = document.createElement('li');
    cartItem.className = 'cart-item';
    cartItem.innerHTML = '<h4>' + productName + '</h4><p>$' + productPrice.toFixed(2) + '</p>';

    // Append the cart item to the cart items list
    cartItemsList.appendChild(cartItem);

    // Update the total price
    var totalPrice = parseFloat(cartTotal.innerHTML.substring(1));
    totalPrice += productPrice;
    cartTotal.innerHTML = '$' + totalPrice.toFixed(2);
  });
});