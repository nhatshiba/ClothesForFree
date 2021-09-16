<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/formLogin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/formLogin/css/util.css">
    <link rel="stylesheet" type="text/css" href="/formLogin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/formLogin/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form validate-form flex-sb flex-w" action="/login" method="post">
                @csrf
					<span class="login100-form-title p-b-53">
						Đăng nhập
					</span>

{{--                <a href="#" class="btn-face m-b-20">--}}
{{--                    <i class="fa fa-facebook-official"></i>--}}
{{--                    Facebook--}}
{{--                </a>--}}

{{--                <a href="#" class="btn-google m-b-20">--}}
{{--                    <img src="/formLogin/images/icons/icon-google.png" alt="GOOGLE">--}}
{{--                    Google--}}
{{--                </a>--}}

                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
                </div>
                <div class="wrap-input100">
                    <input class="input100" type="text" name="username">
                    {{--                    <span class="focus-input100"></span>--}}
                </div>

                <div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
                </div>
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password">
                    {{--                    <span class="focus-input100"></span>--}}
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        <a href="/" style="font-size: 20px; color: snow">Sign In</a>
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

                    <a href="/register" class="txt2 bo1">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/formLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/vendor/bootstrap/js/popper.js"></script>
<script src="/formLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/vendor/daterangepicker/moment.min.js"></script>
<script src="/formLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/formLogin/js/main.js"></script>

</body>
</html>
