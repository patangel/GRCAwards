<!DOCTYPE html>
<html lang="zxx">
@section('title', 'About the Award')

<head>
	@include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
@include('partials.voter.preloader')
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Contact us</li>
				</ul>
			</div>
			<h1 class="title">Contact us</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="marathon-register-row" style="justify-content: center;">
						<div class="marathon-register">
						<h2 class="title"><span>Send us a Message</span></h2>
							<form id='regForm' method="POST" action="">
								@csrf
								<ul class="form-cover">
									<li class="inp-cover">
										<input id="first_name" type="text" name="first_name" placeholder="First name" required>
									</li>
									<li class="inp-cover">
										<input id="last_name" type="text" name="last_name" placeholder="Last name" required>
									</li>
									<li class="inp-cover inp-email">
										<input id="email" type="email" name="email" placeholder="E-mail" required>
										
									</li>
									<li class="inp-text"><textarea id="comments" name="message" placeholder="Message"></textarea></li>
								</ul>
								<div class="btn-form-cover">
									<button id="#submit" type="submit" class="btn">
										<span>Submit</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--================= SIDEBAR =================-->
				@include('partials.voter.sidebar')
				<!--=============== SIDEBAR END ===============-->
			</div>
		</div>
	</section>

	<!--==================== FOOTER ====================-->
	@include('partials.voter.footer')
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	@include('partials.voter.scripts')
</body>

</html>