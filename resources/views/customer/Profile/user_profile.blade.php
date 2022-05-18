@extends('layouts.customer.customer_master')
@section('customers')
@php
    $userData = DB::table('users')->where('id',Auth::user()->id)->first();
@endphp
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <br>
                    <img class="card-img-top" style="border-radius:50%"
                     src="{{(!empty($userData->profile_photo_path) ? url('upload/user_images/'.$userData->profile_photo_path) : 
                     url('upload/no_image.jpg')) }}" width="100%" height="100%" alt="" /> <br><br>

                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>   
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>   
                    <a href="{{route('user.change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>   
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>   

            </div>

                <div class="col-md-2">

                </div>

                <div class="col-md-8">
                    <h3 class="text-center">
                        <span class="text-danger">Hi...</span>
                        <strong>{{Auth::user()->name}}</strong>
                        Welcome To HyperActive Online Shop
                    </h3>


                    <div class="card-body">
                        <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" id="name" name="name" value="{{Auth::user()->name}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone" value="{{Auth::user()->phone}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Profile Photo <span>*</span></label>
                                <input type="file" id="Profile_Photo_Path" name="Profile_Photo_Path" class="form-control" >
                            </div>

                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                        </form>		
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection