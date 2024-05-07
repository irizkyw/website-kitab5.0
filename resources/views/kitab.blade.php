@extends('master')
@section('content')
        <div class="container">
            <div class="row landPage my-3">
                <div class="col-sm-3 d-flex flex-column">
                    <div style="max-height:80vh; overflow-y: auto;">
                        <ol class="list-group">
                            <li class="list-group-item d-flex justify-content-center align-items-center my-1 favorite" style="border-radius: 10px; position: sticky; top: 0; z-index: 1; height: 120px; background-color:#222831; color:#FFFFFF;">
                                <div class=" d-flex flex-column justify-content-center align-items-center" style="text-align: center">
                                    <h1 class="m-0" style="font-size: 32px; text-align:center">{{ $data['religion'] }}</h1>
                                    <p class="m-0" style="font-size: 16px; line-height: 1; text-align:center"><i>{{ $data['books']->first()->books }}</i></p>
                                </div>
                            </li>
                            @if($data['religion'] == 'Kristen')
                                @foreach ($data['list_books'] as $book)
                                <a href="{{ route('scripture.detail', ['kitab' => $data['books']->first()->books, 'book' => $book['code'], 'chapter' => $book['code'] . '.1']) }}" class="text-decoration-none">
                                    <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px; z-index: 0;">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">{{ $book['name'] }}</div>
                                        </div>
                                    </li>
                                </a>
                                @endforeach
                            @endif

                            @if($data['religion'] == 'Islam')
                                @foreach ($data['list_chapters'] as $chapter)
                                <a href="{{ route('scripture.detail', ['kitab' => $data['books']->first()->books, 'chapter' => $chapter['id']]) }}" class="text-decoration-none">
                                    <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px; z-index: 0;">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">{{ $chapter['name'] }}</div>
                                                Surat ke {{ $chapter['id'] }}, {{ $chapter['total_verses'] }} Ayat
                                        </div>
                                    </li>
                                </a>
                                @endforeach
                            @endif

                        </ol>
                    </div>
                </div>
                
                <div class="col-sm-9 d-flex flex-column">
                    <div class="row border" style="border-radius: 10px">
                        <div class="text p-3">
                            <h1 style="font-size: 32px;">{{ $data['data_chapter']['chapter_name'] }}</h1>
                            @if($data['religion'] == 'Islam')
                            <p style="font-size: 16px; line-height: 1;">{{ $data['data_chapter']['translation']; }}</p>
                            @endif
                            <div id="scrollProgressBarBackground" style="position: absolute; top: 0; left: 0; width: 0%; height: 10px; background-color: #0000; border-radius: 10px;"></div>
                            <div id="scrollProgressBar" style="width: 0%; height: 10px; background-color: #33D8D8; border-radius:10px"></div>
                           
                        </div>
                    </div>
                    <div class="row my-2 border" style="border-radius: 10px">
                        @if($data['religion'] == 'Kristen')
                        <div class="col-sm-6 p-2">
                            <h1 style="font-size: 16px">Pasal</h1>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle w-100 d-flex justify-content-between align-items-center" style="background-color: #33D8D8; border: none;" type="button" id="dropdownMenuButtonNumber" type="button" id="dropdownMenuButtonText" data-bs-toggle="dropdown" aria-expanded="false">
                                    1<!-- Default: Angka 1 -->
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonText" style="max-height: 50vh; overflow-y: auto;">
                                        @foreach ($data['list_chapters'] as $chapter)
                                            @if($loop->first)
                                                @continue
                                            @endif
                                            <li>
                                                <a class="dropdown-item" href="{{ route('scripture.detail', [
                                                    'kitab' => $data['books']->first()->books,
                                                    'book' => $data['data_chapter']['book_id'],
                                                    'chapter' => $chapter['id']
                                                ]) }}" data-value="{{ $data['data_chapter']['book_id'] }}">
                                                    {{ $chapter['name'] }}
                                                </a>
                                            </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="{{ $data['religion'] == 'Kristen' ? 'col-sm-6' : 'col-sm-12' }} p-2">
                            <h1 style="font-size: 16px">Ayat</h1>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle w-100 d-flex justify-content-between align-items-center" style="background-color: #33D8D8; border: none;" type="button" id="dropdownMenuButtonNumber" type="button" id="dropdownMenuButtonText" data-bs-toggle="dropdown" aria-expanded="false">
                                    1<!-- Default: Angka 1 -->
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonText" style="max-height: 50vh; overflow-y: auto;">
                                    <!-- Daftar angka di sini -->
                                    @for($i = 1; $i <= count($data['data_chapter']['verses']); $i++)
                                        <li><a class="dropdown-item" href="#verse-{{$i}}" data-value="{{$i}}">{{$i}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- CONTENT VERSES -->
                        <!-- cek agama -->
                            @include('verses/' . strtolower($data['books']->first()->books), compact('data'))
                    <!-- END CONTENT VERSES -->
                </div>
            </div>
        </div>
@stop