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
    </div>

    <div class="product-category">
      <h2>Water Bottles</h2>
      <!-- Add Water Bottles product items here -->
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
  
</body>
</html>
