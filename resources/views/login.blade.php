<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LoginPage</title>

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

    <section class="loginPage">
        <div class="container  my-5">
            <div class="row">
                <div class="col-sm-6 login_left d-flex flex-column justify-content-center ">
                    <a href="{{ url('/landingPage') }}" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left my-5" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                        </svg>
                    </a>
                    <p>
                        Welcome <span>Back Friends!</span> <br>
                        <span2>Jangan lupakan ibadah dengan membaca kitab</span>
                    </p>
                    <div class="textfield">
                        <span class="input-Email">
                            <input class="form-control email my-3" type="text" name="Email" id="Email" placeholder="Email/username">
                        </span>

                        <span class="input-group">
                            <input class="form-control password" type="password" name="Email" id="Email" placeholder="Password">
                            {{-- <input class="form-control password" type="text" name="Email" id="Email" placeholder="Password">
                            <button1 class="btn btn-outline-secondary" type="button" id="toggleButton" onclick="togglePasswordVisibility()">
                                <i id="toggleIcon" class="fas fa-eye"></i>
                            </button> --}}
                        </span>
                    </div>
                    <div class="forgotPass text-end my-2 mx-4">
                        <a href="{{ url('/changePass') }}">Forgot Password?</a>
                    </div>
                    <a class="btn longBtn my-4" data-bs-target="#" data-bs-toggle="modal" type="submit">Login</a>
                    <div class="row justify-content-center my-3">
                        <div class="col-5">
                            <hr>
                        </div>
                        <div class="col-1">
                            <p style="font-size: 14px; color:#7D7D7D;">OR</p>
                        </div>
                        <div class="col-5">
                            <hr>
                        </div>
                    </div>
                    <div class="googlePic d-flex justify-content-center my-2">
                        <a href=""><img src="./images/google.png" alt=""></a>
                    </div>
                    <div class="btnRegris my-5">
                        <p>Become Member? <span><a href="{{ url('/signUp') }}">Register now</a></span></p>
                    </div>

                </div>
                <div class="col-sm-6 login_right d-flex flex-column justify-content-center">
                    <img src="images/loginpic.png" alt="" />
                    <div class="text-center">
                        <p>“Lebih baik kehilangan sesuatu demi Tuhan. Daripada kehilangan Tuhan demi sesuatu” <br>
                            <span><b>Mufti Menk</b></span>
                        </p>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    {{-- <script>
        function togglePasswordVisibility() {
        var passwordInput = document.getElementById("Email");
        var toggleIcon = document.getElementById("toggleIcon");
    
        if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
        } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
        }
    }
    </script> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>