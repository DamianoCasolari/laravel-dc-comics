@extends('layout.app')
@section('title', 'Admin index')
@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <div class="add_comic_container d-flex justify-content-end mb-5">
            <a href="{{ route('admin.comics.create') }}" type="button" class="btn btn-dark my_button ">Add comic</a>
        </div>
        <table class="table align-middle text-center  table-borderless">
            <thead>
                <tr class="text-light my_button">
                    <th>Thumb</th>
                    <th>Type</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($comics as $comic)
                    <tr class="text-light less_brightness hover_efx position-relative">
                        <td>
                            <img style="width:70px;height:100px;" src="{{ $comic->thumb }}" class="comic_img"
                                alt="{{ $comic->title . ' image' }}">
                        </td>
                        <td class="">{{ $comic->type }}</td>
                        <td class="">{{ $comic->series }}</td>
                        <td class="">{{ $comic->sale_date }}</td>
                        <td class="">{{ $comic->price }}</td>
                        <td class="">
                            <a name="" id="" class="btn btn-primary"
                                href="{{ route('admin.comics.show', $comic->id) }}" role="button">View</a>
                            Edit | Delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
