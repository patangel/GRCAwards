<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title>Register | GRCFinCrimeAwards</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<style>
		.error {
  float: none !important;
  margin: 0 .5em;
  color: red;
}
	</style>

</head>

<body id="home">
	@include('partials.voter.topbar')
	<section id="register" class="s-marathon-register">
		<div class="container">
			<div class="marathon-register-row" style="justify-content: center;">
					<div class="marathon-register">
						<h2 class="title"><span>Register</span></h2>
						<form id='regForm' method="POST" action="{{route('register')}}" name="regForm">
							@csrf
							<ul class="form-cover">
								<li class="inp-cover inp-email">
									<input id="email" type="email" name="email" placeholder="E-mail" required>
									@error('email')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									@if(Session::has('danger'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{session('danger')}}</strong>
                                    </span>
                                    @endif
								</li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox" name="i_agree" id="i_agree" value="1Xagrzi">
									<p>I have read the <a href="{{route('show_policy')}}" target="_blank">Privacy Policy</a> and <a href="{{route('show_tc')}}" target="_blank">Terms and Conditions</a>.</p>
								</div>
							</div>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn">
									<span>Register</span>
								</button>
							</div>
						</form>
					</div>
			</div>
			<!-- <div class="footer-subscribe col-12 col-sm-12 col-lg-12" style="text-align:center;">
				<p>By clicking the button you agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms and Conditions</a></p>
				<p>By clicking the button you agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms and Conditions</a></p>

			</div> -->
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
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/scripts.js')}}"></script>

</body>
</html>
