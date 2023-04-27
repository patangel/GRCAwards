<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<title>Login | GRCFinCrimeAwards</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
	<!-- =================== STYLE =================== -->

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<style>
		.error {
			float: none !important;
			margin: 0 .5em;
			color: red;
		}

		#toast-container {
			margin-top: 50px;
		}
	</style>

</head>

<body id="home">

	@include('partials.voter.topbar')

	<section id="register" class="s-marathon-register">
		<img src="{{asset('assets/images/tringle-gray-little.svg')}}" alt="img" class="register-img-effect-2">
		<div class="container">
			<div class="marathon-register-row" style="justify-content: center;">
				<div class="marathon-register">
					<h2 class="title"><span>Login</span></h2>
					<form id='loginForm' method="POST" action="{{route('login')}}" name="loginForm">
						@csrf
						<ul class="form-cover">
							<li class="inp-cover inp-email footer-subscribe">
								<input id="accessToken" type="text" name="accessToken" placeholder="One-time-password" required>
								<p style="font-size:12px; margin-top:0px;">use the one-time-password sent to your Email</p>
								@error('token')
								<span class="invalid-feedback" role="alert" style="color:red">
									{{ $message }}
								</span>
								@enderror
							</li>
						</ul>
						<div class="btn-form-cover">
							<button id="#submit" type="submit" class="btn">
								<span>Login</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="footer-subscribe col-12 col-sm-12 col-lg-12" style="text-align:center;">
				<p>Don't have an OTP yet? <a href="{{route('show_register_form')}}">Go here</a></p>
				<p style="margin-top:0px;">Registered but didn't get an OTP? <a href="{{route('show_register_form')}}">Go here</a></p>

			</div>
		</div>
	</section>
	<!-- ============= MAP-WITH-ROUTE END ============= -->

	<!--==================== FOOTER ====================-->
	@include('partials.voter.footer')
	<!--================== FOOTER END ==================-->
	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="{{asset('assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	@if(Session::has('warning'))
	<script>
		toastr.options = {
			"closeButton": true,
			"progressBar": false,
			"preventDuplicates": true,
			"preventOpenDuplicates": true,
			"positionClass": "toast-top-center",
			"showMethod": "slideDown"
		}
		toastr.warning("{{ session('warning') }}");
	</script>
	@endif

	@if(Session::has('success'))
	<script>
		toastr.options = {
			"closeButton": true,
			"progressBar": false,
			"preventDuplicates": true,
			"preventOpenDuplicates": true,
			"positionClass": "toast-top-center",
			"showMethod": "slideDown"
		}
		toastr.success("{{ session('success') }}");
	</script>
	@endif

</body>

</html>