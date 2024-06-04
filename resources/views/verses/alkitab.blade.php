<div class="content-verse" style="max-height: 100vh; overflow-y: auto; overflow-x: hidden">
                        <div class="row " style="max-height:58vh; overflow-y: auto; padding-right: 10px" id="scrollContainer">
                            <div class="text_kitab p-3 border" style="border-radius: 10px" id="verse-1">
                                <div class="row">
                                    <div class="col-12">
                                        <p id="verse-" style="font-size: 16px; line-height: 1.2;">

                                            @foreach ($data['data_chapter']['verses'] as $key_verse => $verse)
                                                @if($verse['items'] == null || $verse['items'] == '')
                                                    null
                                                    @continue
                                                @endif
                                                
                                                @foreach ($verse['items'] as $key => $value)
                                                        <span id="verse-{{$key}}" class="text-verse d-inline-block" style="font-size: 16px; line-height: 1.2;">{{ htmlspecialchars($value['text']) }}</span>
                                                @endforeach
                                                <br><br>        
                                            @endforeach
        
                                        </p>
                                    </div>
                                </div>
                                <a href="#" class="heart-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-heart-fill heart-path" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>