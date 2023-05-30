@extends('layout.app')
@section('content')

    @extends('layout.app')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-light">
                    <th>Thumb</th>
                    <th>Type</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($comics as $comic)
                    <tr class="text-light">
                        <td>
                            <img style="width:100px;height:200px;" src="{{ $comic->thumb }}" class="comic_img"
                                alt="{{ $comic->title . ' image' }}">
                        </td>
                        <td class="">{{ $comic->type }}</td>
                        <td class="">{{ $comic->series }}</td>
                        <td class="">{{ $comic->sale_date }}</td>
                        <td class="">{{ $comic->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

@endsection
