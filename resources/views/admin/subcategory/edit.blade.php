@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">


                {{-- ------------------------------- Update Sub Category ------------------------------- --}}
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Sub Category</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <form action="{{ route('sub-category.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="sub_category_id" value="{{ $subCategory->id }}">

                                    <div class="form-group">
                                        <h5>Category Name <span class="text-danger">*</span></h5>
                                        <div class="">
                                            <input type="text" name="sub_category_name" class="form-control"
                                                value="{{ $subCategory->name }}">
                                            @error('sub_category_name')
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
