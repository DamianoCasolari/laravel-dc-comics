@extends('layout.admin_app')
@section('title', 'Add new comic')
@section('content')

    @include('partials.validation_errors')
    <div class="add_comic_container container d-flex justify-content-end py-4">
        <a href="{{ route('admin.comics.index') }}" type="button" class="btn btn-dark my_button ">
            <i class="fa-solid fa-house"></i> Back to index</a>
    </div>
    <h1 class="text-primary container font_title">Add new comic</h1>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="form_container w-100">
            <form class="text-white" action="{{ route('admin.comics.store') }}" method="POST" class="w-100">
                @csrf

                <div class="mb-3 ">

                    <label for="title" class="col-4 col-form-label">title</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="title" id="title"
                            value="{{ old('title') }}" placeholder="Name">
                    </div>
                    @error('title')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Title, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="thumb" class="col-4 col-form-label">image</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="thumb" id="thumb"
                            value="{{ old('thumb') }}" placeholder="thumb">
                    </div>
                    @error('thumb')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Image, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="description" class="col-4 col-form-label">Description</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="description" id="description"
                            value="{{ old('description') }}" placeholder="Description">
                    </div>
                    @error('description')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Description, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="price" class="col-4 col-form-label">Price</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="price" id="price"
                            value="{{ old('price') }}" placeholder="price">
                    </div>
                    @error('price')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Price, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="sale_date" class="col-4 col-form-label">Sale date</label>
                    <div class="col-12">
                        <input type="date" class="form-control w-100" name="sale_date" id="sale_date"
                            value="{{ old('sale_date') }}" placeholder="sale_date">
                    </div>
                    @error('sale_date')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Sale_date, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="type" class="col-4 col-form-label">Type</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="type" id="type"
                            value="{{ old('type') }}" placeholder="Name">
                    </div>
                    @error('type')
                        <div class="alert alert-danger position-relative" style="margin-top:1px;" role="alert">
                            <i class="fa-regular fa-xl fa-hand-pointer up_down"></i>
                            <strong>Type, Error: </strong>{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 text-center col-12">
                    <div class=" col-12 mt-5">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
