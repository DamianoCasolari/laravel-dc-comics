@extends('layout.admin_app')
@section('title', 'Admin index')
@section('content')
    <div class="container">

        <div class="add_comic_container d-flex justify-content-end py-4">
            <a href="{{ route('admin.comics.create') }}" type="button" class="btn btn-dark my_button "> <i class="fa fa-plus"
                    aria-hidden="true"></i> Add comic</a>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="text-primary mb-4 font_title">Admin page</h1>
        <table class="table align-middle text-center  table-borderless">
            <thead>
                <tr class="text-light my_button">
                    <th>Thumb</th>
                    <th>Title</th>
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
                        <td class="">{{ $comic->title }}</td>
                        <td class="">{{ $comic->type }}</td>
                        <td class="">{{ $comic->series }}</td>
                        <td class="">{{ $comic->sale_date }}</td>
                        <td class="">{{ $comic->price }}</td>
                        <td class="buttons_container d-flex flex-column d-xxl-table-cell">
                            <a name="" id="" class="btn btn-primary m-1 fs_13"
                                href="{{ route('admin.comics.show', $comic->id) }}" role="button"> <i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a name="" id="" class="btn btn-primary m-1 fs_13"
                                href="{{ route('admin.comics.edit', $comic->id) }}" role="button"><i
                                    class="fa fa-pencil-square" aria-hidden="true"></i> </a>

                            <button type="button" class="btn btn-danger m-1 fs_13" data-bs-toggle="modal"
                                data-bs-target="#{{ $comic->id }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>



                            <!-- Modal -->
                            <div class="modal fade" id="{{ $comic->id }}" tabindex="-1"
                                aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ 'Warning' }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the item?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Optional: Place to the bottom of scripts -->
                            {{-- <script>
                                const myModal = new bootstrap.Modal(document.getElementById('{{ $comic->id }}'), options)
                            </script> --}}

                        </td>
                    </tr>
            </tbody>
            @endforeach

        </table>

    </div>
@endsection
