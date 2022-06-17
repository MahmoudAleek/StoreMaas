@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4">

        <div class="form">

            <form action="" style="margin-top :20px">

                <h4 style="margin: 0px 0px; color: #222; font-size: 22px;"> Product details </h4>

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> prepertyID </p>
                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Choose Property</option>
                            @foreach ($allProperty as $property)
                                <option value="{{ $property->id }}">{{ $property->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> propertyValue </p>
                        <div class="form-outline">
                            <input type="text" id="propertyValue" name="property_name" placeholder=""
                                class="form-control" />
                            <label class="form-label" for="propertyValue">property Value</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> quantity </p>
                        <div class="form-outline">
                            <input type="number" id="quantity" name="quantity" placeholder="" class="form-control" />
                            <label class="form-label" for="quantity">quantity</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> price </p>
                        <div class="form-outline">
                            <input type="number" id="price" name="price" placeholder="" class="form-control" />
                            <label class="form-label" for="price">price</label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary">Finish</button>
                </div>

            </form>

        </div>

    </div>
@endsection
