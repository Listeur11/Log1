<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('fonts/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('fonts/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-login100" style="background-image: url('{{asset('images/ski.jpg')}}');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form class="login100-form validate-form">
            <div class="container-fluid">
                <div class="col-6">

				<span class="login100-form-title p-b-37">
					Log1
				</span>

                    <div class="wrap-input100 validate-input m-b-20" data-validate="Entrer votre Mail ">
                        <input class="input100" type="text" name="username" placeholder="Mail du compte">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-25" data-validate="Entrer votre mot de passe">
                        <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Connexion
                        </button>
                    </div>

                    <div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Mot de passe oublié ?
					</span>
                    </div>


                    <div class="text-center">
                        <a href="#" class="txt2 hov1">
                            Inscrivez vous !
                        </a>
                    </div>
                </div>
                <div class="col-6">


                </div>

            </div>
        </form>


    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('vendor/login/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/login/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/login/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/login/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/login/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/login/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/login/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/login/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/login/main.js')}}"></script>

</body>
