@extends('layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="container  position-relative" id="app">
        <div class="tag">current series</div>
        <div class="bg_night p-2 row row-cols-2 row-cols-lg-4 mt-4">
            @foreach ($comics as $comic)
                <a class="h-100" href="{{ route('showComic', $comic->id) }}" role="button">
                    <div class="p-2">
                        <div class=" my_card p-2 col drop_shadow d-flex justify-content-between flex-column h-100">
                            <div class="container_img d-flex justify-content-center flex-column">
                                <img src="{{ $comic->thumb }}" class="comic_img w-100 shadow rounded-2"
                                    alt="{{ $comic->title . 'image' }}">
                                <h3 class="my-2 pb-3 ">{{ $comic->title }}</h3>
                            </div>
                            <div class="d-flex justify-content-between flex-column h-100">
                                {{-- <h6 class="mb-2 gray_text"><b> Series :</b> <br>
                                    <span class="ms-3 ">{{ $comic->series }}</span>
                                </h6>
                                <h6 class="mb-2 gray_text "><b> Sale date :</b> <br>
                                    <span class="ms-3">{{ $comic->sale_date }}</span>
                                </h6> --}}

                                <hr>
                                <h5 class="my-2 text-end">{{ $comic->price }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
