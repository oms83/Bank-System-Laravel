<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ env('APP_NAME') }} - Reset Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/login_util.css">
	<link rel="stylesheet" type="text/css" href="{{ url('') }}/css/login_main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ url('') }}/images/img-01.png" alt="IMG">
				</div>

                <form class="login100-form validate-form" method="POST" action="{{ route("set_password") }}">
                    @csrf
                    <input type="hidden" name="code" value="{{ $code }}"/>

					<span class="login100-form-title">
						Set Account Password
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

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Set Password
						</button>
					</div>

					<div class="text-center p-t-12">
						
					</div>

					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ url('') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ url('') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ url('') }}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ url('') }}/js/login_main.js"></script>

</body>
</html>