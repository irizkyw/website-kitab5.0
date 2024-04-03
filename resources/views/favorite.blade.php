<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Favorite</title>

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
                        <a class="nav-link active" id="favorite-link" href="{{ url('/favorite') }}">Favorite</a>
                        <a class="nav-link" id="contact-link" href="{{ url('/contact') }}">Contact</a>
                    </div>
                    <input class="form-control search w-25" type="text" name="search" id="search" placeholder="Search">
                    <a class="border buttonLgn btn btn-primary mx-3" style="color: #FFFFFF" href="{{ url('/login') }}" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Login</a>
                </div>
            </div>
            </div>
        </nav> 
    </section>  

    <section class="sidebar">  
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasRightLabel">Account Setting</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama" value="Velman Harefa" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nickname</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama" value="Velman" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email" value="velmanh24@gmail.com" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" value="velmanharefa" readonly>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary buttonLgn" id="saveBtn" style="display: none;">Simpan</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <button class="btn btn-secondary buttonLgn justify-content-center" id="editBtn">Edit</button>
                <button class="btn btn-secondary buttonLgn justify-content-center mx-2" style="background-color: #FF204E;" id="logoutBtn">Logout</button>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row landPage my-3">
                <div class="col-sm-3 d-flex flex-column justify-content-center">
                    <div style="max-height:80vh; overflow-y: auto;">
                        <ol class="list-group">
                            <li class="list-group-item d-flex justify-content-center align-items-center my-1 favorite" style="border-radius: 10px; position: sticky; top: 0; z-index: 1; height: 120px; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center">
                                    <h1 class="m-0" style="font-size: 32px; text-align:center">Favorite</h1>
                                    <p class="m-0" style="font-size: 16px; line-height: 1; text-align:center"><i>5 Favorites</i></p>
                                </div>
                            </li>
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px; z-index: 0;">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Kejadian</div>
                                        Pasal 1, Ayat 1
                                    </div>
                                </li>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>

                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>

                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            <a href="#" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Keluaran</div>
                                        Pasal 2, Ayat 24
                                    </div>
                                </li>
                            </a>
                            
                            
                        </ol>
                    </div>
                </div>
                
                <div class="col-sm-9 d-flex flex-column">
                    <div class="row border" style="border-radius: 10px">
                        <div class="text p-3">
                            <h1 style="font-size: 32px;">Kejadian</h1>
                            <p style="font-size: 16px; line-height: 1;">Perjanjian Lama</p>
                            <div id="scrollProgressBarBackground" style="position: absolute; top: 0; left: 0; width: 0%; height: 10px; background-color: #0000; border-radius: 10px;"></div>
                            <div id="scrollProgressBar" style="width: 0%; height: 10px; background-color: #33D8D8; border-radius:10px"></div>
                        </div>
                    </div>

                    <div class="row my-2 p-0" style="max-height:58vh; overflow-y: auto; padding-right: 10px" id="scrollContainer">
                        
                        <div class="text_kitab p-3 border" style="border-radius: 10px" id="content1"> 
                            <h1 style="font-size: 32px;">1</h1>
                            <p style="font-size: 16px; line-height: 1.2;">Pada mulanya Allah menciptakan langit dan bumi.</p>
                            <a href="#" class="heart-icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart-fill heart-path" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                </svg>
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