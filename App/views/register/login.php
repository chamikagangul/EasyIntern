<?php $this->setLayout("empty"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= PROOT ?>SignUp/images_signup/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/fonts_signup/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/fonts_signup/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/vendor_signup/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/css_signup/util.css">
    <link rel="stylesheet" type="text/css" href="<?= PROOT ?>SignUp/css_signup/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?= PROOT ?>signUp/images_signup/bg-01.jpg);">
                    <span class="login100-form-title-1">
						Log In
					</span>
                </div>

                <form class="login100-form validate-form" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" id="username" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" id="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
                        </div>

                        <div>
                            <a href="<?= PROOT ?>register/register" class="txt1">
								Don't have an account??
							</a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Login"></input>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/bootstrap/js/popper.js"></script>
    <script src="<?= PROOT ?>SignUp/vendor_signup/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/daterangepicker/moment.min.js"></script>
    <script src="<?= PROOT ?>SignUp/vendor_signup/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/vendor_signup/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= PROOT ?>SignUp/js_signup/main.js"></script>

    

</body>

</html>