<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>SALON AURA</title>
  <meta name="title" content="SALON AURA">
  <meta name="description" content="">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - flaticon
  -->
  <link rel="stylesheet" href="assets/css/flaticon.min.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/01.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Call Us :</p>

            <a href="tel:01234567895" class="item-link">+94789424546</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Opening Hour :</p>

            <p class="item-text">Sunday - Friday, 08 am - 09 pm</p>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">
          AURA
          <span class="span">Salon</span>
        </a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="index.html" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="servicees.html" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li class="navbar-item">
              <a href="pricing.html" class="navbar-link" data-nav-link>Pricing</a>
            </li>

            <li class="navbar-item">
              <a href="gallery.html" class="navbar-link" data-nav-link>Gallery</a>
            </li>
          
            <li class="navbar-item">
              <a href="about.html" class="navbar-link" data-nav-link>About</a>
            </li>

          </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#locations" class="btn has-before">
          <span class="span">Our Location</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-before has-bg-image" id="home" aria-label="home"
        style="background-image: url('./images/12.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">About Us</h1>

          <p class="hero-text">
            Experience excellence in a truly luxurious atmosphere offering you the ultimate satisfaction 
            in hair and beauty services with Salon Zero by Master Stylist Surith Rasantha who recognized worldwide as an international consultant and migrant stylist.
            At Salon AURA, we take enormous pride in representing the highest standards in the hair industry.
             We have confidence in excellence with a heart and our approach towards the hair, makeup, and other beauty
              services are emulated and framed against a backdrop of clean-lined, industrial decor where new and unique creations are crafted, honed, and inspired by you, for you.
            At Salon AURA, our committed group of beauticians, nails and skin specialists accompany innumerable long 
            periods of involvement in the magnificence business. We endeavour to make each customer our best, whether
             you are a new or returning client, our team of highly trained stylists are ready to make you look your absolute best.
            "We want our salon to be a place where clients are treated with genuine warmth, a place where they can relax and feel good about themselves."
          </p>

          <a href="servicees.html" class="btn has-before">
            <span class="span">Explore Our Services</span>

            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>

      <!-- 
        - #LOCATIONS
      -->

      <section class="section locations" id="locations" aria-label="locations">
        <div class="container">

          <h2 class="h2 section-title" style="text-align: center; color: rgb(247, 244, 237);">Our Locations</h2> <br><br>

          <div class="map-section">
            <img src="./images/13.jpg" alt="Map showing Salon Aura locations">
          </div>

          <div class="locations-section">
            <div class="location">
              <h3>Boralesgamuwa</h3>
              <p>102 1/1, Colombo Road, Rattanapitiya, Boralesgamuwa 10290</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 009 957</p>
            </div>
            <div class="location">
              <h3>Thalawathugoda</h3>
              <p>1112/2, Thalangama South, Battaramulla</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 660 225</p>
            </div>
            <div class="location">
              <h3>Kotahena</h3>
              <p>290 George R. De Silva Mawatha, Colombo 01300, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 76 650 010</p>
            </div>
            <div class="location">
              <h3>Wattala</h3>
              <p>1 Sri Wickrama Mawatha, Wattala 11300, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 055 055</p>
            </div>
            <div class="location">
              <h3>Nugegoda</h3>
              <p>389 High Level Rd, Nugegoda, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 11 282 052</p>
            </div>
            <div class="location">
              <h3>Kiribathgoda</h3>
              <p>71 Colombo - Kandy Rd, Kiribathgoda 11300, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 009 957</p>
            </div>
            <div class="location">
              <h3>Kandana</h3>
              <p>67 Negombo Rd, Kandana, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 712 017</p>
            </div>
            <div class="location">
              <h3>Wellawatta</h3>
              <p>4, 1/1 Collingwood Place, Colombo 00600, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 420 044</p>
            </div>
            <div class="location">
              <h3>Dehiwala</h3>
              <p>45/1 Hill St, Dehiwala-Mount Lavinia 10350, Sri Lanka</p>
              <p><ion-icon name="call-outline"></ion-icon> +94 77 722 022</p>
            </div>
          </div>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            AURA
            <span class="span">SALON</span>
          </a>

          <form action="" class="input-wrapper">

            <input type="email" name="email_address" placeholder="Enter Your Email" required class="email-field">
            <button type="submit" class="btn has-before">
              <span class="span">Subscribe Now</span>
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Quick Links</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Services</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Meet Our Team</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Portfolio</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Need A Career?</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">News & Blog</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Cutting</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Shaving & Design</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Colors</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Beauty & Spa</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Body Massages</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Recent News</p>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./images/footer-blog-1.jpg" width="70" height="75" loading="lazy"
                    alt="The beginners guide to Henna Brows in Brisbane" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">The beginners guide to Henna Brows in Brisbane</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2024</time>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 70; --height: 75;">
                  <img src="./images/footer-blog-2.jpg" width="70" height="75" loading="lazy"
                    alt="How do I get rid of unwanted hair on my face?" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">How do I get rid of unwanted hair on my face?</a>
                  </h3>

                  <div class="card-date">
                    <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                    <time datetime="2022-08-25">25 August 2024</time>
                  </div>
                </div>

              </div>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li class="footer-list-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="contact-link">
                No 245,B Narahenpita,Watthala.
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+0123456789" class="contact-link">+94789424546</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="contact-link">Sun - Friday, 08 am - 09 pm</span>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:support@gmail.com" class="contact-link">Piumini7@gmail.com</a>
            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Piumini Waranga</a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>

  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
