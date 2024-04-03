@extends('master')
@section('content')

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

@stop