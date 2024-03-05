<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homepage</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('./style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->
    <style>
    </style>
</head>
<body>

  <section class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
      <div class="container">
        <a1 class="navbar-brand" href="#">KitabSuci</a1>
        <div class="collapse navbar-collapse navText" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto  login">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            <a class="nav-link" aria-current="page"  href="#">Scripthure</a>
            <a class="nav-link" aria-current="page" href="#">Contact</a>
            <button class="border" href="#">Login</button>
          </div>
        </div>
      </div>
    </nav> 
  </section>  

  <section class="content">
    <div class="container">
      <div class="row landPage">
        <div class="col-sm-6  d-flex flex-column justify-content-center">
          <p class="m-0">Kumpulan <span>Kitab Suci</span><br>
            Agama di Indonesia <br>
            <span2>Jangan lupakan ibadah dengan membaca kitab</span>
          </p>
          
          <div class=" d-flex aligment-item-end">
            <div class="landPict my-3">
              <img src="./images/googleplay.png" alt="">
            </div>
          </div>
          <!-- <div class="landPict">
            <img src="./images/kemenag.png" alt="">
          </div> -->
        </div>
        <div class="col-sm-6 d-flex ms-auto justify-content-end p-0">
          <img src="./images/landingpage1.png" alt="">
        </div>
      </div>

      <div class="row my-5">
        <div class="d-flex desc border ">
          <div class="col-sm-4">
            <p>Aplikasi Agama <br>
              <span>Terlengkap</span>
            </p>
          </div>
          <div class="col-sm-4">
            <p>Aplikasi Agama <br>
              <span>Terlengkap</span>
            </p>  
          </div>
          <div class="col-sm-4">
            <p>Aplikasi Agama <br>
              <span>Terlengkap</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
    
    <!-- <section class="sideNavbar">
      <div class="sidenav border border-danger">
        <div class="row logo">
          <img src="./images/logo.png" alt="" style="width:70px; height:70px;" class="mx-2">
          <h1>Nama Aplikasi</h1>
        </div>
        
        <div class="row">
          <div class="a">Dashboard</div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
            <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
          </svg>
        </div>
        <div class="a">Bible</div>
        <div class="a">Record</div>
        <div class="a">Profile</div>
      </div>
      
      <div class="main">
        <div class="container border border-danger">
          <div class="row">
            <div class="text">
              <p>halo</p>
              <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
            </div>
          </div>
        </div>
      </div>
      
    </section> -->
    
    <!-- <span class="input-search">
      <form action="#" method="get">
        <input class="form-control search" type="text" name="search" id="search" placeholder="Search">
      </form>
    </span> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>