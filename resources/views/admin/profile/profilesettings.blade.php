@extends('layouts.admin.admin_master');

@section('admin')
    <div class="container pt-4">

        <section>
            <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                @CSRF
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> Edit Admin Name. </p>
                        <div class="form-outline">
                            <input type="text" id="Name" name="name" value="{{ $admin->name }}" class="form-control" />
                            <label class="form-label" for="Name">Admin Name</label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12 input">
                        <p> Edit Admin Email. </p>
                        <div class="form-outline">
                            <input type="email" id="email" name="email" value="{{ $admin->email }}"
                                class="form-control" />
                            <label class="form-label" for="email">Admin Email</label>
                        </div>
                    </div>

                </div>

                <button class="btn btn-primary"> Save Change </button>
            </form>

            <form action="{{ route('admin.profile.updatepassword') }}" method="post" class="mt-3">
                @csrf
                <h3> Edit Password. </h3>
                <div class="col-lg-12 col-md-12 col-12 input">
                    <p> Old Password </p>
                    <div class="form-outline">
                        <input type="password" name="old_password" id="password" class="form-control" />
                        <label class="form-label" for="password">Admin Email</label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 input">
                    <p> New Password </p>
                    <div class="form-outline">
                        <input type="password" name="password" id="newpassword" class="form-control" />
                        <label class="form-label" for="newpassword">Admin Email</label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 input">
                    <p> Confitm Password </p>
                    <div class="form-outline">
                        <input type="password" name="password_confirmation" id="confirm" class="form-control" />
                        <label class="form-label" for="confirm">Admin Email</label>
                    </div>
                </div>

                <button class="btn btn-primary"> Save Change </button>

            </form>
        </section>

    </div>
@endsection
