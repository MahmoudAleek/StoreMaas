@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-8">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Brand List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Brand Name</th>
                                            <th>Brand Image</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->name }}</td>
                                                <td> <img width="40" height="30" src="{{ asset($brand->image) }}" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{ route('brand.editpage', $brand->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('brand.delete', $brand->id) }}" id="delete"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            {{-- url('/admin/brand/edit/' . $brand->id) --}}
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->



                {{-- ------------------------------- Add Brand ------------------------------- --}}
                <div class="col-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Brand</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <h5>Brand Name <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="text" name="brand_name" class="form-control">
                                            @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Brand Image <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="file" name="brand_image" class="form-control">
                                            @error('brand_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-rounded btn-primary">Add Brand</button>
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
