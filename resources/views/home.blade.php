@extends('layout.app')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="bg_night p-4 row row-cols-2 row-cols-lg-3">
            @foreach ($comics as $comic)
                <div class="p-3">
                    <div class="card my_card p-4 col shadow">
                        <div class="container_img d-flex justify-content-center">
                            <img src="{{ $comic->thumb }}" class="comic_img w-100 shadow rounded-2"
                                alt="{{ $comic->title . 'image' }}">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text">{{ $comic->type }}</p>
                            <h6 class="mb-2 gray_text"><b> Series :</b> <br>
                                <span class="ms-3 ">{{ $comic->series }}</span>
                            </h6>
                            <h6 class="mb-2 gray_text "><b> Sale date :</b> <br>
                                <span class="ms-3">{{ $comic->sale_date }}</span>
                            </h6>

                            <hr>
                            <h5 class="card-title text-end">{{ $comic->price }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
