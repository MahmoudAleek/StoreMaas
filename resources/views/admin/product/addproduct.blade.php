@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4">


        <div class="form">
            <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data"
                style="margin-top :20px">
                @csrf

                <h4 style="margin: 20px 0px; color: #222; font-size: 22px;"> Add New Product </h4>

                <div class="row">

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> Product Name </p>
                        <div class="form-outline">
                            <input type="text" id="ProductName" name="title" class="form-control" />
                            <label class="form-label" for="ProductName">Product Name</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> Model </p>
                        <div class="form-outline">
                            <input type="text" id="Model" name="model" class="form-control" />
                            <label class="form-label" for="Model">Model</label>
                        </div>
                    </div>



                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> Note </p>
                        <div class="form-outline">
                            <input type="text" id="Note" name="note" class="form-control" />
                            <label class="form-label" for="Note">Note</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> Description </p>
                        <div class="form-outline">
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            <label class="form-label" for="description">description</label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> condition </p>
                        <select class="form-select form-select-md mb-3" name="state" aria-label=".form-select-lg example">
                            <option selected disabled>Open this select menu</option>
                            <option value="1">active</option>
                            <option value="2">inactive</option>
                        </select>
                    </div>



                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> AvailableTime </p>
                        <div class="form-outline">
                            <input type="date" id="AvailableTime" name="available_time" class="form-control" />
                            <label class="form-label" for="AvailableTime">AvailableTime</label>
                        </div>
                    </div>

                    <p> Brands </p>
                    <div class="col-lg-6 col-md-12 col-12 input">
                        <select class="form-select form-select-md mb-3" name="brand_id"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <p> Category & Sub Category </p>
                    <div class="col-lg-6 col-md-12 col-12 input">
                        <select class="form-select form-select-md mb-3" name="category_id"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Open this select menu</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <select class="form-select form-select-md mb-3" name="subcategory_id"
                            aria-label=".form-select-lg example">
                            <option selected disabled>Open this select menu</option>

                        </select>
                    </div>


                    <div class="col-lg-12 col-md-12 col-12 input">
                        <label class="form-label" for="customFile">Choose File</label>
                        <input type="file" class="form-control" name="images[]" id="customFile" multiple />
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Next </button>

            </form>
        </div>

    </div>
@endsection
