<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('includes/headerScripts')
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

    <title>EBA | LOGIN</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Event Branding Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="Admin/adminLogin.php">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>


    <main class="container my-4">
        <div class="row">
            <section class="col-md-6 offset-md-3">

                <div class="card shadow p-5">
                    <h2 class="text-center text-uppercase font-time">USER LOGIN</h2>
                    <hr>

                    <form action="" method="POST">

                        <div class="text-center">
                            <span class="text-warning"><i class="fa fa-users fa-5x"></i></span>
                        </div>

                        <div class="form-group">
                            <label for="Email">Username</label>
                            <input type="email" name="userName" class="form-control" id="Email"
                                aria-describedby="emailHelp" placeholder="Enter Username">
                        </div>


                        <label for="Password">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter Password" aria-label="Enter Password" aria-describedby="basic-addon2"
                                autocomplete="off">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye"
                                        aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <a href="forgotPassword.php" class="text-danger font-weight-bold"
                                name="forget_password">Forgot your
                                password?</a>
                        </div>


                        <div class="form-group">
                            <a href="activateDisableAccount.php" class="text-danger font-weight-bold"
                                name="activateDisableEmail">Activate
                                your
                                Disable Account</a>
                        </div>

                        {{-- <div class="text-center my-2">
                            <div class="h-captcha text-center" data-sitekey="{{ $hcaptchaSiteKey }}"></div>
                        </div> --}}

                        <button type="submit" class="btn btn-primary rounded-pill btn-block"
                            name="login">Login</button>
                        <h6 class="mt-3">Not have an Account? <a href="register.php"> Create Account Here</a></h6>

                    </form>

                </div>
            </section>
        </div>
    </main>

    @include('includes/footerScripts')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-addon2').click(function() {
                let passwordField = $("#password");
                let passwordFieldType = passwordField.attr('type');

                if (passwordFieldType == "password") {
                    passwordField.attr("type", "text");
                    $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');

                } else {
                    passwordField.attr("type", "password");
                    $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
                }
            })
        })
    </script>

</body>

</html>
