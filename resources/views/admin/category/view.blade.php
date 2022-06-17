@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4">

        {{-- ########## ADD SUB CATEGORY SECTION ########## --}}
        <h3 style="margin: 20px 30px; color: #222; font-size: 26px;"> Add Category and Sub Category </h>
            <form action="{{ route('category.store') }}" method="POST" style="margin-top :20px">
                @csrf
                <div class="form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 input">
                            <p style="font-size: 16px; "> Category Name <span style="color: red;"> * </span> </p>
                            <div class="form-outline">
                                <input type="text" id="Category" name="category_name" class="form-control" />
                                <label class="form-label" for="Category">Category</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Add category</button>
                </div>
            </form>






            {{-- ########## ADD SUB CATEGORY SECTION ########## --}}
            <form action="{{ route('sub-category.store') }}" method="POST" style="margin-top :20px">
                @csrf

                <div class="form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 input">
                            <p style="font-size: 16px; "> Sub Category Name <span style="color: red;"> * </span> </p>
                            <div class="form-outline">
                                <input type="text" id="Subcategory" name="subcategory_name" class="form-control" />
                                <label class="form-label" for="Subcategory ">Sub Category </label>
                            </div>

                            <p style="font-size: 16px; " class="pt-3"> Categories List </p>
                            <div class="col-lg-6 col-md-12 col-12 input">
                                <select class="form-select form-select-md mb-3" name="cat_id"
                                    aria-label=".form-select-lg example">
                                    <option selected disabled>Open this select menu</option>
                                    @foreach ($Categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary" type="submit">Add sub category</button>

                </div>
            </form>

            {{-- ########## CATEGORY TABLE SECTION ########## --}}
            <h3 style="margin: 20px 30px; color: #222; font-size: 26px;"> Category List </h3>
            <div class="container">
                <section class="secstion pb-5">

                    <div class="card card-ecommerce">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table product-table">
                                    <thead class="mdb-color">
                                        <tr style="text-align: center;">
                                            <th>
                                                <strong>Category Name</strong>
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
                                        @foreach ($Categories as $cat)
                                            <tr style="text-align: center;">
                                                <th> {{ $cat->name }} </th>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-mdb-toggle="modal" data-mdb-target="#EditCategory"> <i
                                                            class="fa fa-edit"></i> </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-close"></i> </button>
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

            {{-- ########## SUB CATEGORY TABLE SECTION ########## --}}
            <h3 style="margin: 20px 30px; color: #222; font-size: 26px;">Sub Category List </h3>
            <div class="container">
                <section class="sectiosn pb-5">

                    <div class="card card-ecommerce">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table product-table">
                                    <thead class="mdb-color">
                                        <tr style="text-align: center;">
                                            <th>
                                                <strong>Sub Category Name</strong>
                                            </th>
                                            <th>
                                                <strong>Category</strong>
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
                                        @foreach ($subCategories as $subcat)
                                            <tr style="text-align: center;">
                                                <td> {{ $subcat->name }} </td>
                                                <td>
                                                    {{ $subcat->categoryId }}
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-mdb-toggle="modal" data-mdb-target="#EditSubCategory"
                                                        data-subcatid={{ $subcat->id }} onclick="test()"
                                                        id="EditSubCat_btn"> <i class="fa fa-edit"></i>
                                                    </button>
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-close"></i> </button>
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
    <div class="modal fade" id="EditCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 input">
                                <p style="font-size: 16px; "> Category Name <span style="color: red;"> * </span> </p>
                                <div class="form-outline">
                                    <input type="text" id="Category" name="edit_category_name" class="form-control" />
                                    <label class="form-label" for="Category">Category Name</label>
                                </div>
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

    <!--------------------------------- Modal ------------------------------------------>
    <div class="modal fade" id="EditSubCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sub Category</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sub-category.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12 input">
                                <p style="font-size: 16px; ">Sub Category Name <span style="color: red;"> * </span> </p>
                                <div class="form-outline">
                                    <input type="hidden" value="" name="edit_subcategory_id">
                                    <input type="text" id="Category" class="form-control"
                                        value="#data-subcat-{{ $subcat->id }}" />
                                    <label class="form-label" for="Category">Sub Category Name</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Save changes</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    <!--------------------------------- Modal ------------------------------------------>
@endsection
