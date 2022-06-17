<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/Css/Rejester-sginIn.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Css/Styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Regester</title>
</head>

<body style="background: #f3f3f3;">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <div class="Rejester">

                    <div class="form-header">
                        <div class="logo">
                            <h1 class="login-title"> MAAS </h1>
                            <img src="{{ asset('upload/MASS.png') }}" alt="">
                        </div>
                        <div>
                            <button class="btn-login"> Sign Up </button>
                            <a href="./LoginUser.html">
                                <button class="btn-Rejester"> LogIn </button>
                            </a>
                        </div>
                    </div>

                    <p> Create account </p>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="">
                                    <label for="name"> <i class="fa fa-user"></i> Name </label>
                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                </div>
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="">
                                    <label for="Lastname"> <i class="fa fa-user"></i> Last Name </label>
                                    <input type="text" name="lastname" id="Lastname" placeholder="Last Name" required>
                                </div>
                            </div> --}}


                            <div class="col-lg-12">
                                <div class="">
                                    <label for="Email"> <i class="fa fa-envelope"></i> Email </label>
                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                </div>
                            </div>

                            {{-- <div class="col-lg-12">
                                <div class="">
                                    <label for="Number"> <i class="fa fa-phone"></i> Number </label>
                                    <input type="text" name="number" id="Number" placeholder="Number" required>
                                </div>
                            </div> --}}

                            <div class="col-lg-6">
                                <div class="">
                                    <label for="Password"> <i class="fa fa-lock"></i> password </label>
                                    <input type="password" name="Password" id="Password" placeholder="Password"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="">
                                    <label for="confirm"> <i class="fa fa-lock"></i> Confirm Passwod </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm Passwod" required>
                                </div>
                            </div>


                        </div>
                        <button type="submit" class="Submit"> Register </button>

                    </form>

                </div>

            </div>


        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./Javascript/Javascript.js"></script>
</body>

</html>
