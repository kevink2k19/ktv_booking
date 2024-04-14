<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Name KTV</title>
    <link rel="shortcut icon" href="{{asset('/images/testLogo.png')}}" type="image/x-icon">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Custom Styling -->
 <link href="{{asset('/css/main.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top bg-main-gd text-d">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <a data-mdb-collapse-init
      class="nav-toggle"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
</a>
<!-- Right elements -->
<div class="d-flex nav-brand align-items-center">
    <a class="navbar-brand md-col-navbrand mt-2 me-0 mt-lg-0" href="#">
        <img
        src="{{asset('/images/testLogo.png')}}"
          height="45"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      </div>
    <!-- Right elements -->
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand  me-0 text-center lg-col-navbrand mt-2 mt-lg-0" href="#">
        <img
          src="{{asset('/images/testLogo.png')}}"
          height="45"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Room Gallery</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Promotion</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

@yield('content')
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white bg-secondary-gd" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center ">
          <span class="me-3">Book a room right now</span>
          <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
            Book Now !
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 bg-main-gd">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<!-- Mian -->
<script src="{{asset('/js/main.js')}}" type="text/javascript"></script>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
</body>
</html>