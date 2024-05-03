@extends('master')
@section('content')

        <div class="container">
            <div class="row my-5">
                <div class="col-sm-6 d-flex justify-content-center align-items-center">
                    <img src="./images/scripture.png" alt="" style="width: 100%; height: auto;">
                </div>
                <div class="col-sm-6 p-2">
                    @foreach ($books as $scripture)
                    <div class="row my-2 ">
                        <a href="{{ route('scripture.detail', ['book' => $scripture->books, 'chapter' => 1]) }}" class="col-sm-12 p-0">
                            <div class="col-sm-12 my-1 d-flex justify-content-center border" style="border-radius:10px; height: 7rem; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center;">
                                    <h1 class="m-0" style="font-size: 38px; text-align:center">{{ $scripture->agama }}</h1>
                                    <p class="m-0" style="font-size: 20px; line-height: 1; text-align:center"><i>{{ $scripture->books }}</i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@stop