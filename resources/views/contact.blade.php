@extends('master')
@section('content')

        <div class="container">
            <div class="row my-4 p-2 justify-content-center">
                <h1 class="my-3" style="text-align: center; font-size: 48px; font-weight:600">
                    Hello👋, kami dari tim Kitab<span style="color:#33D8D8">Suci</span> 
                </h1>
                <img src="./images/toleran.png" alt="" style="width: 45em; object-fit:contain;">
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
@stop