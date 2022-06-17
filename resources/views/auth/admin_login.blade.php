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

    <title>Login Admin</title>
</head>

<body style="background: #f3f3f3;">

    <div class="container ContainerLogin">
        <div class="row">

            <div class="col-lg-12">

                <div class="RejesterLogin">

                    <div class="form-header">
                        <div class="logo">
                            <h1 class="login-title"> MAAS </h1>
                            <img src="{{ asset('frontend/images/maas.png') }}" alt="">
                        </div>
                        <div>
                            <button class="btn-login"> LogIn </button>
                        </div>
                    </div>

                    <p> Hi Admin </p>

                    <form method="POST" action="{{ isset($guard) ? url($guard . '/login') : route('login') }}">
                        @csrf
                        <div class="">
                            <label for="email"> <i class="fa fa-envelope"></i> Email </label>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>


                        <div class="">
                            <label for="password"> <i class="fa fa-lock"></i> password </label>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>


                        <div class="remmber">

                            <div>
                                <label> remember Me </label>
                                <input type="checkbox" name="remember" id="remember_me">
                            </div>
                            <a href="{{ route('password.request') }}">
                                <p> Forgot Your Password! </p>
                            </a>
                        </div>


                        <button type="submit" class="Submit"> Sgin In </button>

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
