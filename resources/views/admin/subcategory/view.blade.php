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
                            <h3 class="box-title">Sub Category List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sub Category Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subCategories as $subCategory)
                                            <tr>
                                                <td>{{ $subCategory->name }}</td>
                                                <td>
                                                    <a href="{{ route('sub-category.editpage', $subCategory->id) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <a href="{{ route('sub-category.delete', $subCategory->id) }}" id="delete"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
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



                {{-- ------------------------------- Add Sub Category ------------------------------- --}}
                <div class="col-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Sub Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form action="{{ route('sub-category.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="1" name="category_id">
                                    <div class="form-group">
                                        <h5>Sub Category Name <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="text" name="sub_category_name" class="form-control">
                                            @error('sub_category_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-rounded btn-primary">Add Sub Category</button>
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
