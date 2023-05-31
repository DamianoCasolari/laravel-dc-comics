@extends('layout.app')
@section('title', $comic->name)
@section('content')
    <div class="add_comic_container container d-flex justify-content-end mb-5 light_shadow">
        <a href="{{ route('admin.comics.index') }}" type="button" class="btn btn-dark my_button ">
            <i class="fa-solid fa-house"></i> Back to index</a>
    </div>
    <div class="container d-flex flex-column justify-content-around">
        <div class="img_cotainer m-4 text-center">
            <img class="img-fluid drop_shadow" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        </div>
        <div class="info_container text-white">
            <p class="card-text">{{ $comic->type }}</p>
            <h1>{{ $comic->title }}</h1>
            <p>
                {{ $comic->description }}

            </p>
            <h6 class="card-subtitle mb-2 text-muted"><b> Series :</b> <br>
                <span class="ms-3 ">{{ $comic->series }}</span>
            </h6>
            <h6 class="card-subtitle mb-2 text-muted "><b> Sale date :</b> <br>
                <span class="ms-3">{{ $comic->sale_date }}</span>
            </h6>

            <hr>
            <h5 class="card-title text-end">{{ $comic->price }}</h5>
        </div>
    </div>
@endsection
