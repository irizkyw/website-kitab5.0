@extends('master')
@section('content')
    <div class="container">
        <div class="row landPage my-3">
            <div class="col-sm-3 d-flex flex-column justify-content-center">
                <div style="max-height:80vh; overflow-y: auto;">
                    <ol class="list-group">
                        <li class="list-group-item d-flex justify-content-center align-items-center my-1 favorite" style="border-radius: 10px; position: sticky; top: 0; z-index: 1; height: 120px; background-color:#222831; color:#FFFFFF;">
                            <div class="d-flex flex-column justify-content-center align-items-center" style="text-align: center">
                                <h1 class="m-0" style="font-size: 32px; text-align:center">Favorite</h1>
                                <p class="m-0" style="font-size: 16px; line-height: 1; text-align:center"><i>{{ count($favorites) }} Favorites</i></p>
                            </div>
                        </li>

                        @foreach ($favorites as $favorite)
                            <a href="#" class="favorite-item" data-chapter="{{ $favorite['Chapter'] }}" data-ayat-number="{{ $favorite['Ayat']['nomorAyat'] }}" data-ayat-arabic="{{ $favorite['Ayat']['teksArab'] }}" data-ayat-latin="{{ $favorite['Ayat']['teksLatin'] }}" data-ayat-translation="{{ $favorite['Ayat']['teksIndonesia'] }}" data-id="{{ $favorite['id'] }}" style="text-decoration: none">
                                <li class="list-group-item d-flex align-items-center my-1 border" style="border-radius: 10px; z-index: 0;">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $favorite['Chapter'] }}</div>
                                        Ayat ke {{ $favorite['Ayat']['nomorAyat'] }}
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    </ol>
                </div>
            </div>

            <div class="col-sm-9 d-flex flex-column">
                <div class="row border" style="border-radius: 10px">
                    <div class="text p-3">
                        <h1 id="chapter-title" style="font-size: 32px;">List Your Favorite</h1>
                        <div id="scrollProgressBarBackground" style="position: absolute; top: 0; left: 0; width: 100%; height: 10px; background-color: #0000; border-radius: 10px;"></div>
                        <div id="scrollProgressBar" style="width: 0%; height: 10px; background-color: #33D8D8; border-radius: 10px;"></div>
                    </div>
                </div>
                <div class="row my-2 p-0" style="max-height:58vh; overflow-y: auto; padding-right: 10px" id="scrollContainer">
                    <div id="ayat-container" class="text_kitab p-3 border" style="border-radius: 10px; margin-bottom: 10px;">
                        <!-- Dynamic content will be inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.favorite-item').forEach(function (item) {
                item.addEventListener('click', function (event) {
                    event.preventDefault();

                    const chapter = this.getAttribute('data-chapter');
                    const ayatNumber = this.getAttribute('data-ayat-number');
                    const ayatArabic = this.getAttribute('data-ayat-arabic');
                    const ayatLatin = this.getAttribute('data-ayat-latin');
                    const ayatTranslation = this.getAttribute('data-ayat-translation');

                    document.getElementById('chapter-title').innerText = chapter;

                    const ayatContent = `
                        <div class="row">
                            <div class="col-2">
                                <p style="font-size: 16px; line-height: 1.2;">Ayat ${ayatNumber}</p>
                            </div>
                            <div class="col-10">
                                <h1 style="line-height: 1.2; font-size: 32px; text-align: right;">${ayatArabic}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <span>Artinya: </span>
                            <div class="col-12">
                                <p style="font-size: 16px; line-height: 1.2;">${ayatTranslation}</p>
                            </div>
                        </div>
                        <a href="#" class="heart-icon" data-id="${this.getAttribute('data-id')}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-heart-fill heart-path" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                            </svg>
                        </a>
                    `;

                    document.getElementById('ayat-container').innerHTML = ayatContent;
                });
            });
        });
    </script>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $('.heart-icon').click(function(event) {
                                event.preventDefault();

                                var heartIcon = $(this);
                                var heartPath = heartIcon.find('.heart-path');
                                var fill = heartPath.attr('fill') === 'red' ? 'white' : 'red';
                                
                                $.ajax({
                                    url: "{{ route('favorite.destroy') }}",
                                    type: 'DELETE',
                                    data: {
                                        id: heartIcon.data('id')
                                    },
                                    success: function (response) {
                                        if (response.success) {
                                            heartPath.attr('fill', fill);
                                        }
                                    }
                                });
                            });
                        });
                    </script>
@stop
