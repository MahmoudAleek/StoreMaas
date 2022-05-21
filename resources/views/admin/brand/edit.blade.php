@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">


                {{-- ------------------------------- Add Brand ------------------------------- --}}
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Brand</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form action="{{ route('brand.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="old_brand_image" value="{{ $brand->image }}">
                                    <input type="hidden" name="brand_id" value="{{ $brand->id }}">

                                    <div class="form-group">
                                        <h5>Brand Name <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="text" name="brand_name" class="form-control"
                                                value="{{ $brand->name }}">
                                            @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Brand Image <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="file" name="brand_image" class="form-control"
                                                value="{{ $brand->image }}">
                                            @error('brand_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-rounded btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
