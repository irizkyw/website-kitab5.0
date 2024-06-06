<div class="content-verse" style="max-height: 100vh; overflow-y: auto; overflow-x: hidden">
                        @foreach ($data['data_chapter']['verses'] as $verse)
                        <div class="row " style="max-height:58vh; overflow-y: auto; padding-right: 10px" id="scrollContainer">
                            <div class="text_kitab p-3 border" style="border-radius: 10px" id="verse-1">
                                <div class="row">
                                    <div class="col-2">
                                        <p id="verse-{{$verse['nomorAyat']}}" style="font-size: 16px; line-height: 1.2;">{{ $verse['nomorAyat'] }} </p>
                                    </div>
                                    <div class="col-10">
                                            <h1 style="line-height: 1.2; 32px; text-align: right;">{{ $verse['teksArab'] }}</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <span>Artinya: </span>
                                    <div class="col-12">
                                        <p style="font-size: 16px; line-height: 1.2;">{{ $verse['teksIndonesia'] }}</p>
                                    </div>
                                </div>
                                @php
                                    $isFavorite = false;
                                    foreach ($data['favorites'] as $fav) {
                                        if ($fav->ayat == $verse['nomorAyat'] && $fav->book_id == $data['books']->first()->id && $fav->chapter == $data['data_chapter']['chapter_id']) {
                                            $isFavorite = true;
                                            break;
                                        }
                                    }
                                @endphp
                                <a href="#" class="heart-icon" data-verse="{{ $verse['nomorAyat'] }}" data-book="{{ $data['books']->first()->id }}" data-chapter="{{ $data['data_chapter']['chapter_id'] }}" data-religion="{{ $data['religion'] }}" data-from="{{ session()->get('user.id') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{ $isFavorite ? 'red' : 'white' }}" class="bi bi-heart-fill heart-path" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                </a>

                            </div>
                        </div>
                        @endforeach
                    </div>

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
                                    url: "{{ route('favorite.store') }}",
                                    type: 'POST',
                                    data: {
                                        verse: heartIcon.data('verse'),
                                        book: heartIcon.data('book'),
                                        chapter: heartIcon.data('chapter'),
                                        religion: heartIcon.data('religion'),
                                        from: heartIcon.data('from')
                                    },
                                    success: function(response) {
                                        heartPath.attr('fill', fill);
                                    },
                                    error: function(xhr) {
                                        alert('Silahkan login terlebih dahulu');
                                    }
                                });
                            });
                        });
                    </script>
                    