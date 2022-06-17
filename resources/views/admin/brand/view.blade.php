@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4 ">


        <h3 style="margin: 20px 30px; color: #222; font-size: 26px;"> Add Brands </h3>
        <form action="" style="margin-top :20px">

            <div class="form">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p style="font-size: 16px; "> Brand Name <span style="color: red;"> * </span> </p>
                        <div class="form-outline">
                            <input type="text" id="Brand" class="form-control" />
                            <label class="form-label" for="Brand">Brands</label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-12 input">
                        <p> Brand Image <span style="color: red;"> * </span> </p>
                        <input type="file" class="form-control" id="customFile" multiple />
                    </div>

                </div>


                <button class="btn btn-primary" type="submit">Add brand</button>


            </div>


        </form>

        <h3 style="margin: 20px 30px; color: #222; font-size: 26px;"> Brands asd </h3>
        <div class="container">
            <section class="section pb-5 ">

                <div class="card card-ecommerce">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table product-table">
                                <thead class="mdb-color">
                                    <tr style="text-align: center;">
                                        <th>
                                            <strong>Brand Image</strong>
                                        </th>
                                        <th>
                                            <strong>Brand Name</strong>
                                        </th>
                                        <th>
                                            <strong>Edit</strong>
                                        </th>
                                        <th>
                                            <strong>Remove</strong>
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr style="text-align: center;">
                                            <td scope="row">
                                                <img src="{{ $brand->image }}" alt="" class="img-fluid z-depth-0">
                                            </td>
                                            <td> {{ $brand->name }} </td>

                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-mdb-toggle="modal"
                                                    data-mdb-target="#EditBrand"> <i class="fa fa-edit"></i> </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>


    <!--------------------------------- Modal ------------------------------------------>
    <div class="modal fade" id="EditBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('brand.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 input">
                                <p style="font-size: 16px; "> Brand Name <span style="color: red;"> * </span> </p>
                                <div class="form-outline">
                                    <input type="text" id="Brand" name="brand_name" class="form-control" />
                                    <label class="form-label" for="Brand">Brand</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 input">
                                <p> Brand Image <span style="color: red;"> * </span> </p>
                                <input type="file" name="brand_image" class="form-control" id="customFile" multiple />
                            </div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    <!--------------------------------- Modal ------------------------------------------>
@endsection
