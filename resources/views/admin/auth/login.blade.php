<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: AdminCC -  Login Page ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/authentication.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/all-themes.css" />
</head>

<body class="theme-red">
<div class="authentication">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="l-detail">
                    <h5>Welcome</h5>
                    <h1>Admin<span>CC</span></h1>
                    <h3>Sign in to start your session</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul class="list-unstyled l-social">
                        <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                    <ul class="list-unstyled l-menu">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <h4 class="l-login">Login</h4>
                    <form class="" action="{{route('login')}}" id="sign_in" method="POST">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email"name="email" class="form-control">
                                <label class="form-label">User Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password"name="password" class="form-control">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-raised waves-effect bg-red">SIGN IN</button>
                        <a href="sign-up.html" class="btn btn-raised waves-effect">SIGN UP</a>
                        <div class="text-left">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('/')}}admin-assets/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>
</html>
