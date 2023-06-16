<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ env('APP_NAME') }} - Reset Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/login_util.css">
	<link rel="stylesheet" type="text/css" href="../css/login_main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../images/img-01.png" alt="IMG">
				</div>

                <form class="login100-form validate-form" method="POST" action="{{ route("reset_account") }}">
                    @csrf
					<span class="login100-form-title">
						Account Reset
                    </span>
                    
                    @if ($errors->any())
                        <div class="text-danger text-center" style="padding:10px;">
                            {{ implode('', $errors->all(':message')) }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="text-danger text-center" style="padding:10px;">
                            {!! session('error') !!}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="text-success text-center" style="padding:10px;">
                            {!! session('success') !!}
                        </div>
                    @endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email/username is required">
						<input class="input100" type="text" name="email" placeholder="Email/Username" value="{{ old('email') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Reset Account
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Have an Account ? 
						</span>
						<a class="txt2" href="{{ route('login') }}">
							Login
						</a>
					</div>

					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../js/login_main.js"></script>

</body>
</html>