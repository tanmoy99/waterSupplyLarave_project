<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="{{ url('frontend/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style>
      /* Add this CSS to your existing style.css or in a <style> tag in your HTML */
.product-listing {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Three columns */
  gap: 20px; /* Gap between products */
  padding: 20px;
}

.product {
  background-color: #f5f5f5;
  padding: 20px;
  text-align: center;
}
    </style>
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a href="{{ url('/') }}">
        <img src="{{ asset('frontend/img/download.jfif') }}" alt="Company Logo" style="width: 90px; height: 100px;"></a>
    </div>
    <nav class="navbar-icons">
      <a href="#"><img src="{{('frontend/img/grocery-store.png') }}" alt="Cart">Cart</a>
      <a href="#"><img src="{{ asset('frontend/img/avatar.png') }}" alt="Login">LogIn </a>
      <a href="{{ url('/products') }}"> <img src="{{ asset('frontend/img/contact-us.png') }}" alt="Products">Products</a>
    </nav>
  </header>

  <section class="product-section">
    <div class="product-category">
      <h2>Marchents</h2>
      <!-- Add Machinist product items here -->
    </div>

    <div class="product-category">
      <h2>Soft Drinks</h2>
      <!-- Add Soft Drinks product items here -->
        <!-- Product listing section -->
        <section class="product-listing">
          <!-- Product 1 -->
          <div class="product">
            <img src="{{ asset('frontend/img/20 litter.jpg') }}" alt="Product 1">
            <h3>10 Liter Water Bottle</h3>
            <p>10 Ltr.</p>
            <span>80 Taka</span>
            <button>Add to Cart</button>
          </div>

          <!-- Product 2 -->
          <div class="product">
            <img src="{{ asset('frontend/img/30 litter.jpg') }}" alt="Product 2">
            <h3>30 Liter Water Can</h3>
            <p>30 Ltr</p>
            <span>90 Taka</span>
            <button>Add to Cart</button>
          </div>

          <!-- Product 3 -->
          <div class="product">
            <img src="{{ asset('frontend/img/40 litter.jpg') }}" alt="Product 3">
            <h3>40 Liter Water Can</h3>
            <p>40 Ltr</p>
            <span>110 Taka</span>
            <button>Add to Cart</button>
          </div>
          <!-- Product 4 -->
          <div class="product">
            <img src="{{ asset('frontend/img/1litter.jpg') }}" alt="Product 4">
            <h3>1 Liter Water Bottles</h3>
            <p>Case Of 9 Bottles</p>
            <span>225 Taka</span>
            <button>Add to Cart</button>
          </div>
                  <!-- Product 4 -->
                  <div class="product">
                    <img src="{{ asset('frontend/img/2ltr.jpg') }}" alt="Product 4">
                    <h3>2 Liter Water Bottles</h3>
                    <p>Case Of 6 Bottles</p>
                    <span>240 Taka</span>
                    <button>Add to Cart</button>
                  </div>
                          <!-- Product 4 -->
          <div class="product">
            <img src="{{ asset('frontend/img/500-ml-.jpg') }}" alt="Product 4">
            <h3>500 ML Water Bottles</h3>
            <p>Case Of 24 Bottles</p>
            <span>480 Taka</span>
            <button>Add to Cart</button>
          </div>
        </section>
      </div>
    </div>

    <div class="product-category">
      <h2>Water Bottles</h2>
      <!-- Add Water Bottles product items here -->
      <!-- Product listing section -->
      <section class="product-listing">
        <!-- Product 1 -->
        <div class="product">
          <img src="{{ asset('frontend/img/20 litter.jpg') }}" alt="Product 1">
          <h3>10 Liter Water Bottle</h3>
          <p>10 Ltr.</p>
          <span>80 Taka</span>
          <button>Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product">
          <img src="{{ asset('frontend/img/30 litter.jpg') }}" alt="Product 2">
          <h3>30 Liter Water Can</h3>
          <p>30 Ltr</p>
          <span>90 Taka</span>
          <button>Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="product">
          <img src="{{ asset('frontend/img/40 litter.jpg') }}" alt="Product 3">
          <h3>40 Liter Water Can</h3>
          <p>40 Ltr</p>
          <span>110 Taka</span>
          <button>Add to Cart</button>
        </div>
        <!-- Product 4 -->
        <div class="product">
          <img src="{{ asset('frontend/img/1litter.jpg') }}" alt="Product 4">
          <h3>1 Liter Water Bottles</h3>
          <p>Case Of 9 Bottles</p>
          <span>225 Taka</span>
          <button>Add to Cart</button>
        </div>
                <!-- Product 4 -->
                <div class="product">
                  <img src="{{ asset('frontend/img/2ltr.jpg') }}" alt="Product 4">
                  <h3>2 Liter Water Bottles</h3>
                  <p>Case Of 6 Bottles</p>
                  <span>240 Taka</span>
                  <button>Add to Cart</button>
                </div>
                        <!-- Product 4 -->
        <div class="product">
          <img src="{{ asset('frontend/img/500-ml-.jpg') }}" alt="Product 4">
          <h3>500 ML Water Bottles</h3>
          <p>Case Of 24 Bottles</p>
          <span>480 Taka</span>
          <button>Add to Cart</button>
        </div>
      </section>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-left">
          <a href="https://www.facebook.com/bisleriindia"><img src="{{ asset('frontend/img/fb-logo.jpg') }}" alt="Facebook"></a>
          <a href="https://www.instagram.com/bisleriindia/"><img src="{{ asset('frontend/img/insta.jpg') }}" alt="Instagram"></a>
          <a href="https://twitter.com/bisleriindia"><img src="{{ asset('frontend/img/twit.png') }}" alt="Twitter"></a>
        </div>
        <div class="ahsan-magi">
          <div class="footer-center">
            <img src="{{ asset('frontend/img/download.jfif') }}" alt="AQUA DROPS Logo" class="logo-image">
            <p>aqua@Doorstep</p>
            <p>123 Main Street, Anytown, CA 12345</p>
            <p>Phone: (123) 456-7890</p>
            <p>Email: info@aqua.com</p>
          </div>
        </div>
        <div class="footer-right">
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
          <a href="#">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Include this script tag at the end of the body -->
<script>
  // Define an object to store cart items
  const cart = {};

  // Add event listeners to all "Add to Cart" buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
  addToCartButtons.forEach(button => {
      button.addEventListener('click', () => {
          const productName = button.previousElementSibling.previousElementSibling.textContent;
          const price = button.previousElementSibling.textContent.replace('Taka', '').trim();

          if (cart[productName]) {
              cart[productName].quantity += 1;
          } else {
              cart[productName] = {
                  quantity: 1,
                  price: parseFloat(price),
              };
          }

          updateCartDisplay();
      });
  });

  // Update the cart display in the UI
  function updateCartDisplay() {
      const cartDisplay = document.querySelector('.cart-display');
      let cartItems = '';

      for (const product in cart) {
          const { quantity, price } = cart[product];
          const total = (quantity * price).toFixed(2);
          cartItems += `${product}: ${quantity} (Total: ${total} Taka)<br>`;
      }

      cartDisplay.innerHTML = cartItems;
  }
</script>

</body>
</html>
