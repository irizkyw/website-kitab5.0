<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kitab</title>

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
                        <a class="nav-link active" id="scripture-link" href="{{ url('/scripture') }}">Scripture</a>
                        <a class="nav-link" id="favorite-link" href="{{ url('/favorite') }}">Favorite</a>
                        <a class="nav-link" id="contact-link" href="{{ url('/contact') }}">Contact</a>
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
            <div class="row my-5">
                <div class="col-sm-6 d-flex justify-content-center align-items-center">
                    <img src="./images/scripture.png" alt="" style="width: 100%; height: auto;">
                </div>
                <div class="col-sm-6 p-2">
                    <div class="row my-2 ">
                        <a href="{{ url('/kitab') }}" style="text-decoration: none;">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">Kristen</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>Alkitab</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row my-2">
                        <a href="#" style="text-decoration: none;">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">Islam</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>Al-Qur'an</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row my-2">
                        <a href="#" style="text-decoration: none;">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">Hindu</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>Weda</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row my-2">
                        <a href="#" style="text-decoration: none;">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">Buddha</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>Tipitaka</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row my-2">
                        <a href="#" style="text-decoration: none;">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">Konghucu</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>Shishu Wujing</i></p>
                                </div>
                            </div>
                        </a>
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