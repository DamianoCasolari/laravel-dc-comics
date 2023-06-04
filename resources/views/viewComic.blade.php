@extends('layout.app')
@section('title', $comic->name)
@section('content')
    <div class="container position-relative">

        <div class="dark_tag">current comic</div>

        <div class="add_comic_container container d-flex justify-content-end py-4 light_shadow">
            <a href="{{ route('home') }}" type="button" class="btn btn-dark my_button ">
                <i class="fa-solid fa-house me-2"></i> Go Back</a>
        </div>
        <div class="container d-flex justify-content-around flex-column flex-lg-row">
            <div class="img_cotainer my-4 px-3 text-center col-12 col-lg-4 ">
                <img class="img-fluid drop_shadow" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

            </div>
            <div class="info_container text-white py-4 col-12 col-lg-8 d-flex justify-content-between flex-column ">
                <p class="card-text">{{ $comic->type }}</p>
                <h1>{{ $comic->title }}</h1>
                <p class="fs-5">
                    {{ $comic->description }}

                </p>
                <h6 class="card-subtitle mb-2 text-muted"><b> Series :</b> <br>
                    <span class="ms-3 fs-5">{{ $comic->series }}</span>
                </h6>
                <h6 class="card-subtitle mb-2 text-muted "><b> Sale date :</b> <br>
                    <span class="ms-3 fs-5">{{ $comic->sale_date }}</span>
                </h6>

                <hr>

                <h4 class="card-title text-end mb-2">{{ $comic->price }}</h4>
                <a href="#" class="btn btn-primary text-center">Buy now</a>

            </div>
        </div>
    </div>
@endsection
