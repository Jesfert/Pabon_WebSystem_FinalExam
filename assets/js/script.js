function showProductDetails(name, description, price) {
    var overlay = document.getElementById('product-overlay');
    var productName = document.getElementById('product-name');
    var productPrice = document.getElementById('product-price');
    
    productName.textContent = name;
    productPrice.textContent = price;
    
    overlay.style.display = 'block';
  }
  function closeProductOverlay() {
    var checkoutCard = document.getElementById('checkoutoutCard');
    checkoutCard.style.display = 'block';
    var overlay = document.getElementById('product-overlay');
    document.getElementById('orderSuccess').style.display = 'none';
    overlay.style.display = 'none'; // Hide the overlay
  }

  function placeOrder() {
    var checkoutCard = document.getElementById('checkoutoutCard');
    checkoutCard.style.display = 'none';
    // Show the orderSuccess card
    document.getElementById('orderSuccess').style.display = 'block';
  }  
  