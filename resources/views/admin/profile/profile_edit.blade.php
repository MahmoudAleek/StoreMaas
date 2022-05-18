@extends('layouts.admin.admin_master');

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Admin Profile Control</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                           <div class="col-12">						

                            <div class="row" >
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Admin UserName <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" value="{{$editData->name}}" required=""> 
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>Admin Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" value="{{$editData->email}}" required="" >
                                        </div>
                                    </div>
                                </div> 

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <h5>File Input Field <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" id="Image" name="Profile_Photo_Path" class="form-control" > <div class="help-block"></div></div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img src="{{(!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path) : url('upload/no_image.jpg')}}" style="width: 100px;hieght:100px" id="showImage" alt="">
                                </div>
                            </div>

                           <div class="text-xs-right">
                               <button type="submit" class="btn btn-rounded btn-primary">Submit</button>
                           </div>
                       </form>
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#Image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection