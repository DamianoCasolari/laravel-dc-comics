@extends('layout.app')

@section('content')
    <div class="container">
        <table class="table align-middle text-center  table-borderless">
            <thead>
                <tr class="text-light">
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
                        <td class="">View | Edit | Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
