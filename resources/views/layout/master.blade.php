<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/boxicons.min.css'); }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    @stack('styles')
    <title>PT. Pirngadi Teberau Karya</title>

    <meta name="description" content="With the broad market segment experience, wide range of client services and strength of the organization, PT Pirngadi Teberau Karya has strengthened its existence in the general contracting business in Indonesia. The company has successfully completed dozens of industrial, commercial and residential projects.">
    <meta name="keywords" content="Industrial products, IT services, Business">
    <meta name="robots" content="index, max-image-preview:large">

    <!-- Open graphic SEO tools -->
    <meta property="og:url" content="https://pirngaditeberaukarya.web.id">
    <meta property="og:type" content="Website">
    <meta property="og:title" content="Industrial Product & IT Services for your Business - PT. Pirngadi Teberau Karya">
    <meta property="og:description" content="With the broad market segment experience, wide range of client services and strength of the organization, PT Pirngadi Teberau Karya has strengthened its existence in the general contracting business in Indonesia. The company has successfully completed dozens of industrial, commercial and residential projects.">
    <meta property="og:image" content="https://pirngaditeberaukarya.web.id">
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
          <img src="{{ URL::asset('img/Logo.png'); }}" alt="Logo" width="355" height="55"  
          class="d-inline-block align-top ms-lg-5" />
          <span class="hidden">LogoPT</span>
          </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#toggleMobileMenu"
        aria-controls="toggleMobileMenu"
        aria-expanded="false"
        aria-label="Toggle Navigation"
        >
        <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="toggleMobileMenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/cloudservice">Cloud</a></li>
                <li><a class="dropdown-item" href="/bigdataservice">Big Data</a></li>
                <li><a class="dropdown-item" href="/hitinfrastructure">Hybrid IT Infrastructure</a></li>
                <li><a class="dropdown-item" href="/securityservice">Security</a></li>
                <li><a class="dropdown-item" href="/businessapp">Business Application</a></li>
                <li><a class="dropdown-item" href="/digitalworkspace">Digital Workspace</a></li>
                <li><a class="dropdown-item" href="/consultingservice">Consulting</a></li>
                <li><a class="dropdown-item" href="/manageservice">Managed Services</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Contactors</a></li>
                <li><a class="dropdown-item" href="#">Starters</a></li>
                <li><a class="dropdown-item" href="#">Parts</a></li>
                <li><a class="dropdown-item" href="#">Isolation Switchers</a></li>
                <li><a class="dropdown-item" href="#">Equipement</a></li>
                <li><a class="dropdown-item" href="#">Control Power</a></li>
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="/contactus">Contact Us</a>
              </li>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2 border rounded" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-danger rounded" type="submit">Search</button>
          </form>

        </div>

      </div>
    </nav>
    <!-- Navbar End -->

      @yield('content')

       <!-- FOOTER -->
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4">
              <img class="logo" src="img/Logo PT.png" alt="" />
            </div>
            <div class="col-lg-2">
              <h5 class="text-white">Brand</h5>
              <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <h5 class="text-white">More</h5>
              <ul class="list-unstyled">
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Privacy & Policy</a></li>
                <li><a href="#">Warranty</a></li>
                <li><a href="#">Shipment</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5 class="text-white">Contact</h5>
              <ul class="list-unstyled">
                <li>Address: Jl. Jaksa No.7D, RT.1/RW.5, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340</li>
                <li>Email: corp.pirngaditeberaukarya@gmail.com</li>
                <li>Phone: 021-3929196</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3">
        <div class="container">
          <div class="row-mx-auto">
            <div class="col-mx-6">
              <p class="mb-3 text-center">© 2022 copyright all right reserved | PT. Pirngadi Teberau Karya </p>
            <div class="col-mx-6">
              <div class="social-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="https://wa.me/6285811151135"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.linkedin.com/company/pirngaditeberaukarya/"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<!-- END FOOTER -->

    <script src="{{ URL::asset('js/bootstrap.bundle.min.js'); }}"></script>
    @stack("script")
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  </body>
</html>
