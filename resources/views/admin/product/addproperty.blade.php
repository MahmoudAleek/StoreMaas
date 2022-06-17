@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4">

        <div class="form">

            <form action="{{ route('product.store-property') }}" method="POST" style="margin-top :20px">
                @csrf
                <h4 style="margin: 0px 0px; color: #222; font-size: 22px;"> Properties </h4>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> Properties </p>
                        <div class="form-outline">
                            <input type="text" id="Properties" name="property_name" placeholder="color/size/…."
                                class="form-control" />
                            <label class="form-label" for="Properties">Properties</label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> Properties description </p>
                        <div class="form-outline">
                            <textarea class="form-control" name="property_description" id="Propertiesdescription" rows="4"></textarea>
                            <label class="form-label" for="Propertiesdescription">Properties description</label>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Next Step</button>

            </form>

        </div>

    </div>
@endsection
