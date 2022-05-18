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
            
                    <a href="" class="btn btn-primary btn-sm btn-block">Home</a>   
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>   
                    <a href="" class="btn btn-primary btn-sm btn-block">Change Password</a>   
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
                </div>
            </div>
        </div>
    </div>
@endsection