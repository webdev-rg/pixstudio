<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PixStudio - Login</title>

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="./assets/Image/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="./assets/Image/apple-touch-icon.png"
      type="image/x-icon"
    />

    <!-- Flaticon Link -->
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css"
    />

    <!-- Css File -->
    <link rel="stylesheet" href="./assets/css/login.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <!-- Swiper Js CSS File -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- =========================
          Preloader 
    ========================= -->
    <section class="preloader">
      <div class="spinner"></div>
    </section>

    <!-- =========================
          Login and Slider
    ========================= -->
    <div class="container">
      <div class="login-wrapper">
        <!-- Logo -->
        <div class="logo">
          <a href="./index.html">
            <img src="./assets/Image/Logo.svg" alt="pixhub-logo" />
          </a>
        </div>

        <!-- Login Form -->
        <div class="login-form">
          <div class="title">
            <h1>Welcome back</h1>
            <p>Login to your account</p>
          </div>
          <!-- Social Account Login -->
          <div class="social-media-login">
            <button><i class="fi fi-brands-google"></i></button>
            <button><i class="fi fi-brands-facebook"></i></button>
            <button><i class="fi fi-brands-twitter"></i></button>
          </div>

          <form>
            <div class="input-field">
              <i class="fi fi-rr-envelope"></i>
              <input
                type="text"
                name="username"
                id="username"
                placeholder="Enter Your Username"
                autofocus
                autocomplete="off"
              />
            </div>
            <div class="input-field">
              <i class="fi fi-rr-lock"></i>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter Your Password"
              />
            </div>

            <a href="#">Forgot Password?</a>

            <div class="loginBtn">
              <button id="loginBtn">Login</button>
            </div>

            <p>Don't have an account? <a href="./register.php">Register</a></p>
          </form>
        </div>
      </div>

      <!-- Slider -->

      <div class="slider-container">
        <!-- Slider main container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="https://images.pexels.com/photos/285814/pexels-photo-285814.jpeg?auto=compress&cs=tinysrgb&w=940"
                alt="images"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="https://images.pexels.com/photos/3861964/pexels-photo-3861964.jpeg?auto=compress&cs=tinysrgb&w=940"
                alt="images"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="https://images.pexels.com/photos/34578/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=940"
                alt="images"
              />
            </div>
            <div class="swiper-slide">
              <img
                src="https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&w=940"
                alt="images"
              />
            </div>
          </div>

          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- JavaScript File -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./assets/js/login.js"></script>
  </body>
</html>
