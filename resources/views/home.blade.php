@extends('layout.app')
@section('content')
    <div class="container">
        <div class="bg-light p-4 row row-cols-2 row-cols-lg-3">
            @foreach ($comics as $comic)
                <div class="p-3">
                    <div class="card my_card p-4 col gutter-3">
                        <div class="container_img d-flex justify-content-center">
                            <img src="{{ $comic->thumb }}" class="comic_img w-100" alt="{{ $comic->title . 'image' }}">
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $comic->type }}</p>
                            <h6 class="card-subtitle mb-2 text-muted "><b> Series :</b> <br>
                                <span class="ms-3">{{ $comic->series }}</span>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted "><b> Sale date :</b> <br>
                                <span class="ms-3">{{ $comic->sale_date }}</span>
                            </h6>

                            <h5 class="card-title mt-4">{{ $comic->price }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
