<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/aboutUs.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>About Us - Water Selling</title>
</head>
<body>
    <header class="navbar">
        <div class="logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('frontend/img/download.jfif') }}" alt="Company Logo" style="width: 90px; height: 100px;"></a>

        </div>
        <nav class="navbar-icons">
          <a href="#"><img src="{{('frontend/img/grocery-store.png') }}" alt="Cart">Cart</a>
          @guest
          <a href="{{ route('login') }}"><img src="{{ asset('frontend/img/avatar.png') }}" alt="Login">LogIn</a>
          @else
          <a href="{{ route('user.dashboard') }}"><img src="{{ asset('frontend/img/avatar.png') }}" alt="Profile">Profile</a>
          @endguest


        <a href="{{ url('/products') }}"> <img src="{{ asset('frontend/img/product.png') }}" alt="Products">Products</a>
        <a href="{{ url('/aboutUs') }}"> <img src="{{ asset('frontend/img/contact-us.png') }}" alt="Products">ABOUT US</a>
        </nav>
      </header>
    <main>
        <section class="motto">
            <h1>Welcome To AQUA DROPS</h1>
            <p>
                Welcome to AQUA DROPS! Your ultimate destination for premium water bottles delivered right to your doorstep. At AQUA DROPS, we understand the importance of staying hydrated on-the-go, which is why we offer an extensive range of water bottle sizes to cater to your every need. Whether you're headed to the gym, the office, or on a grand adventure, our collection has something for everyone. What sets us apart is our commitment to exceptional service – with our lightning-fast delivery within an hour, you won't have to wait long to quench your thirst. Join us in embracing a healthier lifestyle, one refreshing sip at a time.
                Discover convenience, quality, and hydration like never before with AQUA DROPS!</p>
        </section>

        <section class="collaborators">
            <h2>Meet Our Collaborators</h2>
            <div class="teammate">
                <img src="{{ asset('frontend/img/tanmoy.jpg') }}" alt="Teammate 1" style="width: 150px;">
                <h3>Tanmoy Bhowmick</h3>
                <p>Co-Founder</p>
            </div>
            <div class="teammate">
                <img src="{{ asset('frontend/img/bonni.jpg') }}" alt="Teammate 1" style="width: 150px;">

                <h3>Bonny Basak</h3>
                <p>Marketing Director</p>
            </div>
            <div class="teammate">
                <img src="{{ asset('frontend/img/dilan.jpg') }}" alt="Teammate 1" style="width: 150px;">

                <h3>Farhan</h3>
                <p>Operations Manager</p>
            </div>
            <div class="teammate">
                <img src="{{ asset('frontend/img/sohan.jpg') }}" alt="Teammate 1" style="width: 150px;">

                <h3>Shohan</h3>
                <p>Sales Representative</p>
            </div>
        </section>
        <section class="contact-form">
            <h2>Contact Us</h2>
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>



        <section class="motto">
            <h1>Our Company Motto</h1>
            <p>We are dedicated to providing clean and refreshing water to our customers, ensuring their health and well-being.</p>
        </section>
    </main>

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
             <a href="">About Us</a>
              <a href="#">Contact Us</a>
              <a href="#">Terms of Service</a>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
