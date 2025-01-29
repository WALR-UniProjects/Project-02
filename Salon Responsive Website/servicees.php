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

    <div class="header-bottom" data-header style="background-color: burlywood;">
      <div class="container">

        <a href="#" class="logo">
          AURA
          <span class="span"><b>Salon</b></span>
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

        <a href="index.html" class="btn has-before">
          <span class="span">Appointment</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>
    </div>
<br>

</header>
  

  <main>
    <article>

     <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="services" id="img" style="background-image: url('./images/09.jpg' )">
        <div class="container">

          <h2 class="h2 section-title text-center" style="color: orange;">Service We Provide</h2>

          <p class="section-text text-center" style="color: rgb(230, 106, 4);">
            <b>Creating a beautiful Community</b>
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-salon"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Cutting Style</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, we pride ourselves on offering a wide range of hair cutting styles tailored to meet the unique needs and preferences of our diverse clientele.
                   Our experienced stylists are trained
                   in the latest techniques and trends, ensuring you leave our salon looking and feeling your best.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shampoo"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hair Washing</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, we believe that a proper hair washing routine is the foundation of healthy, beautiful hair. Our hair washing services are designed to cleanse, nourish,
                   and rejuvenate your hair, leaving it soft, shiny, and full of life. Our professional stylists use high-quality products and techniques tailored to your hair type and needs.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hot-stone"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Body Treatments</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, we offer a range of luxurious body treatments designed to rejuvenate your skin, relax your mind, and revitalize your body. Our treatments are tailored to meet
                   your specific needs, using high-quality products and advanced techniques to ensure you leave feeling refreshed and pampered.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-treatment"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Beauty & Spa</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, we offer a comprehensive range of beauty and spa services designed to enhance your natural beauty and provide you with a rejuvenating experience. Our professional
                   team of stylists, aestheticians, and therapists are dedicated to providing exceptional service, using top-quality products and advanced techniques to ensure you look and feel your best.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-shaving-razor"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Stylist Shaving</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, our stylist shaving services are designed to provide a premium grooming experience for men. Our skilled barbers and stylists use the finest techniques and products to ensure
                   a clean, smooth shave and a refined look. Whether you prefer a traditional shave or a modern, stylish beard trim, we have you covered.
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <i class="flaticon-hair-dye"></i>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Multi Hair Colors</a>
                </h3>

                <p class="card-text">
                  At Salon Aura, we offer a wide range of multi hair coloring services designed to transform your look and express your unique style. Our professional colorists are skilled in the latest
                   techniques and trends, ensuring vibrant, long-lasting color that enhances your natural beauty. Whether you're looking for subtle highlights, bold fashion colors, or a complete color.
                    
                </p>

                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

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