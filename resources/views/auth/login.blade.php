<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('forms/fonts/material-icon/css/material-design-iconic-font.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('forms/css/style.css') }}">
</head>
<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('forms/images/signin-image.jpg') }}" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form" action="login" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="Enter your email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                <a href="/register" class="signup-image-link">Forgot password?</a>
                            </div>
                        </form>
                        <div class="social-login">
                            <a href="/register" class="signup-image-link">Don't have an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('forms/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('forms/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>