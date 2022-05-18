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
                        <span class="text-danger">Profile Change Password</span>
                    </h3>


                    <div class="card-body">
                        <form method="POST" action="{{route('user.update.password')}}" >
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Current Password <span>*</span></label>
                                <input type="password" id="currentpassword" name="current_password" class="form-control" >
                                @if(Session::has('passmessage'))
                                <span>
                                    <strong class="text-danger">{{session::get('passmessage')}}</strong>
                                </span>
                                @endif

                                @error('current_password')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">New Password <span>*</span></label>
                                <input type="password" id="newpassword" name="password"  class="form-control" >
                                @error('password')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Confirm Password<span>*</span></label>
                                <input type="password" id="passwrodconfirmation" name="password_confirmation" class="form-control" >
                                @error('password_confirmation')
                                <span>
                                    <strong class="text-danger">{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                        </form>		
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection