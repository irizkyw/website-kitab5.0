<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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
            <a class="navbar-brand" href="{{ url('/landingPage') }}">Kitab<span style="color: #33D8D8; font-weight:600">Suci</span></a>
            <div class="collapse navbar-collapse navText" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto login justify-content-end">
                    <div class="menu d-flex mx-5">
                        <a class="nav-link" id="home-link" href="{{ url('/landingPage') }}">Home</a>
                        <a class="nav-link" id="scripture-link" href="{{ url('/scripture') }}">Scripture</a>
                        <a class="nav-link" id="favorite-link" href="{{ url('/favorite') }}">Favorite</a>
                        <a class="nav-link active" id="contact-link" href="{{ url('/contact') }}">Contact</a>
                    </div>
                    <input class="form-control search w-25" type="text" name="search" id="search" placeholder="Search">
                    <a class="border buttonLgn btn btn-primary mx-3" style="color: #FFFFFF" href="{{ url('/login') }}">Login</a>
                </div>
            </div>
            </div>
        </nav> 
    </section>  

    <section class="content">
        <div class="container">
            <div class="row my-4 p-2 justify-content-center">
                <h1 class="my-3" style="text-align: center; font-size: 48px; font-weight:600">
                    Hello👋, kami dari tim Kitab<span style="color:#33D8D8">Suci</span> 
                </h1>
                <img src="./images/toleran.png" alt="" style="width: 450px; height: 382px">
                <a class=" my-4" style="text-align: center; text-decoration:none; color:black;">
                    Aplikasi ini dikembangkan atas keinginan tim Kitab Suci untuk menyatukan semua kitab suci agama yang ada di Indonesia menjadi satu aplikasi yang user-friendly dan dapat diakses dengan mudah kapan saja. Kami mengucapkan terima kasih kepada semua pihak yang turut serta dalam pembuatan aplikasi ini sehingga dapat berfungsi dengan baik. Tim Kitab Suci berkomitmen untuk terus mengembangkan dan memperbarui aplikasi agar tetap relevan dan nyaman digunakan, terima kasih.
                </a>
                {{-- <h1 style="text-align: center; font-size: 48px; font-weight:500" > Our Contact</h1> --}}
                <div class="row contact">
                    <div class="col-sm-6 d-flex justify-content-center align-items-center">
                        <div class="col-sm-9">
                            <img style="float: right" src="./images/wa.png" alt="">
                        </div>
                        <div class="col-sm-3">
                            <a class="mx-1" style="text-align:right" href="https://wa.me/6283119266160">
                                <i>083119266160</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-center align-items-center">
                        <div class="col-sm-1">
                            <img style="float: left; max-width:100%" src="./images/email.png" alt="">
                        </div>
                        <div class="col-sm-11">
                            <a class="mx-1" style="text-align:left" href="#">
                                <i>kitabsuci@gmail.com</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row contact my-2">
                    <div class="col-sm-6 d-flex justify-content-center align-items-center">
                        <div class="col-sm-9">
                            <img style="float: right;" src="./images/ig.png" alt="">
                        </div>
                        <div class="col-sm-3">
                            <a class="mx-1" style="text-align:right" href="#">
                                <i>&commat;kitabsuci</i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-center align-items-center">
                        <div class="col-sm-1">
                            <img style="float: left; max-width:100%" src="./images/fb.png" alt="">
                        </div>
                        <div class="col-sm-11">
                            <a class="mx-1" style="text-align:left" href="#">
                                <i>&commat;kitabsuci</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-content border-top">
            <p style="text-align: center">&copy; Copyright KitabSuci. Made by Kelompok 7 ABP</p>
        </div>
    </section>

    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html> 