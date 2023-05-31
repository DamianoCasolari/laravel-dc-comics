@extends('layout.app')

@section('content')
    <div class="container d-flex justify-content-center align-item-center">
        <div class="form_container w-100">
            <form class="text-white" action="{{ route('admin.comics.store') }}" method="POST" class="w-100">
                @csrf

                <div class="mb-3 ">
                    <label for="title" class="col-4 col-form-label">title</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="title" id="title" placeholder="Name"
                            required>
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="thumb" class="col-4 col-form-label">image</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="thumb" id="thumb" placeholder="thumb">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="description" class="col-4 col-form-label">Description</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="description" id="description"
                            placeholder="Description">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="price" class="col-4 col-form-label">Price</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="price" id="price" placeholder="price">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="sale_date" class="col-4 col-form-label">Sale date</label>
                    <div class="col-12">
                        <input type="date" class="form-control w-100" name="sale_date" id="sale_date"
                            placeholder="sale_date">
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="type" class="col-4 col-form-label">Type</label>
                    <div class="col-12">
                        <input type="text" class="form-control w-100" name="type" id="type" placeholder="Name">
                    </div>
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
