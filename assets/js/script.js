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
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  function toggleNavbar() {
    const navbarCollapse = document.querySelector('#navbarNav');
    navbarCollapse.classList.toggle('show');
  }