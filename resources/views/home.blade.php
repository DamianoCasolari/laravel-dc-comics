@extends('layout.app')
@section('content')
    <div class="container">
        <div class="bg-light p-4 row row-cols-2 row-cols-lg-4">
            @foreach (config('db_comics') as $comic)
                <div class="p-3">
                    <div class="card my_card p-4 col gutter-3">
                        <div class="container_img d-flex justify-content-center">
                            <img src="{{ $comic['thumb'] }}" class="comic_img w-100" alt="{{ $comic['title'] . 'image' }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $comic['title'] }}</h6>
                            {{-- <p class="card-text">{{ $comic['description'] }}</p> --}}

                            <h5 class="card-title">{{ $comic['series'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $comic['sale_date'] }}</h6>
                            <p class="card-text">{{ $comic['type'] }}</p>

                            <h5 class="card-title">{{ $comic['price'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
