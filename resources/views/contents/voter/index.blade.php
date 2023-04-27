<!DOCTYPE html>
<html lang="en">
@section('title', 'Home')

<head>
	@include('partials.voter.head')
	<style>


	</style>
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner">
				<img class="ball" src="{{asset('public/assets/images/grc_awards_logo.png')}}" />
			</div>
		</div>

	</div>
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->

	<!-- =========== S-CONFERENCE-SLIDER =========== -->
	<section class="s-conference-slider">
		<div class="conference-slider">
			<div class="conference-slide" style="background-image: url(public/assets/images/ikoyi_bridge.jpg);">
				<img class="conference-slide-tringle" src="public/assets/images/effect-tringle-slider.svg" alt="img">
				<img class="conference-slide-effect" src="public/assets/images/effect-slider-left.svg" alt="img">
				<div class="container" style="justify-content: flex-start;">
					<div class="conference-slide-item">
						<div class="date">9 dec 2021</div>
						<div class="conference-slider-title">GRC & FinCrime</div>
						<h2 class="title"><span>Prevention Awards</span></h2>
						<p>We pride ourselves in celebrating Governance, Risk Management, Compliance and Financial Crime Prevention wins of businesses across the globe.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-SLIDER END ========= -->

	<!-- =========== S-CONFERENCE-COUNTER =========== -->
	<section id="about" class="s-conference-mission" style="background-image: url(public/assets/images/bg-about-home2.png);">
		<div class="s-conference-counter">
			<div class="container">
				<div class="conference-counter-wrap">
					<img class="conference-counter-effect-1" src="public/assets/images/counter-icon-1.svg" alt="img">
					<div class="conference-counter-cover">
						<h4>Voting has ended on the 22nd November, 2021</h4>
						<p>To view the Shortlisted Nominees, <a href="{{route('show_shortlisted_nomineees')}}" class="" tabindex="-1" style="color:rgba(39, 39, 39, .9)"><span>click here</span></a></p>
						<!--<div id="clockdiv" class="clock-timer clock-timer-conference">-->
						<!--	<div class="clock-item days-item">-->
						<!--		<span class="days">--</span>-->
						<!--		<div class="smalltext">Days</div>-->
						<!--	</div>-->
						<!--	<div class="clock-item hours-item">-->
						<!--		<span class="hours">--</span>-->
						<!--		<div class="smalltext">Hours</div>-->
						<!--	</div>-->
						<!--	<div class="clock-item minutes-item">-->
						<!--		<span class="minutes">--</span>-->
						<!--		<div class="smalltext">Minutes</div>-->
						<!--	</div>-->
						<!--	<div class="clock-item seconds-item">-->
						<!--		<span class="seconds">--</span>-->
						<!--		<div class="smalltext">Seconds</div>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
					<img class="conference-counter-effect-2" src="public/assets/images/counter-icon-2.svg" alt="img">
				</div>
			</div>
		</div>
		<div class="s-our-mission s-about-speaker">
			<div class="container">
				<h2 class="title-conference"><span>About the Awards</span></h2>
				<div class="row">
					<div class="col-lg-6 our-mission-img">
						<!-- <span> -->
						<img src="public/assets/images/placeholder-all.png" data-src="public/assets/images/our-mission-2.svg" alt="" class="mission-img-effect-1 rx-lazy">

						<iframe src="https://player.vimeo.com/video/639572038?h=d81f44fad5&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;portrait=0&amp;byline=0&amp;title=0&amp;autoplay=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>

						<!-- <img class="mission-img rx-lazy" src="https://static8.depositphotos.com/1229718/936/i/450/depositphotos_9360236-stock-photo-star-award-on-red-curtains.jpg" data-src="https://static8.depositphotos.com/1229718/936/i/450/depositphotos_9360236-stock-photo-star-award-on-red-curtains.jpg" alt="img"> -->
						<img src="public/assets/images/placeholder-all.png" data-src="public/assets/images/tringle-gray-little.svg" alt="" class="about-img-effect-2 rx-lazy">
						<!-- </span> -->
					</div>
					<div class="col-lg-6 our-mission-info">

						<div class="mission-info-text">
							<p>The Organizers of this awards are advocates for effective Governance, Risk & Compliance system in organisations and a promoter of Anti-Money Laundering and Counter-Terrorism Measures hence the reason for coming up with an initative (GRC & Financial Crime Prevention Awards) to recognize individuals and organisations across the various industries in Nigeria and the United Kingdom who have been outstanding and have demonstrated expertise in this field.</p>
							<p>The GRC & Financial Crime Prevention Annual Awards was created to recognise outstanding contributions by individuals and companies to the development, understanding, or implementation of GRC systems in Nigeria and the...</p>
						</div>
						<a href="{{route('about_the_award')}}" class="btn" tabindex="-1"><span>Read More</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========= S-CONFERENCE-COUNTER END ========= -->
	<!-- ============ SPEAKER & SCHEDULE ============ -->
	<section id="schedule" class="s-event-schedule">
		<div class="container">
			<h2 class="title"><span>Event schedule</span></h2>
			<img class="schedule-effect-white" src="{{asset('public/assets/images/tringle-white.svg')}}" alt="img">
			<img class="schedule-effect-yellow" src="{{asset('public/assets/images/tringle-yellow-little.svg')}}" alt="img">
			<div class="row">
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<i class="mdi mdi-account-multiple-plus mdi-48px" style="color:#D4AF37"></i>
							</div>
							<div class="schedule-item-info active">
								<div class="date">20th Oct 2021 - 19th Nov 2021</div>
								<h4>Nomination/Voting Process</h4>
								<div class="schedule-info-content" style="display: none;">
									<p>Voting is open to the public. The participants with the highest number of votes in every category in various sectors will shortlisted.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-ballot-outline mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">22nd Nov 2021 - 28 Nov 2021</div>
								<h4>Shortlisting and Judging Process</h4>
								<div class="schedule-info-content">
									<p>The Votes are counted inorder to shortlist top 3 nominees under every category. Afterwhich, further screening and examination is done by the Judges to select the winners.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-bell-ring-outline mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">30th Nov 2021</div>
								<h4>Notification of Shortlisted Nominees</h4>
								<div class="schedule-info-content" style="display: none;">
									<p>After nominees have been shortlisted, they are sent a notification informing them that they have been shortlisted and also inviting them to the award ceremony. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6" style="margin-bottom: 15px;">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img"><i class="mdi mdi-trophy-award mdi-48px" style="color:#D4AF37"></i></div>
							<div class="schedule-item-info">
								<div class="date">9th Dec 2021</div>
								<h4>Award Ceremony</h4>
								<div class="schedule-info-content">
									<p>Winners will be unveiled at the award ceremony. Atttending the award ceremony is strictly by invitation.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="s-choose-us">
		<div class="container">
			<h2 class="title"><span>How to Vote</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<div class="conference-post-content" style="background-color: #fff; border-radius:10px;">
						<h4>Quick registration</h4>
						<p>Create a quick account by entering your email and we will send you a an email containing a one-time-password for you to gain access to the platform.<br /><a href="{{route('show_register_form')}}">Click here</a> to register now</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<div class="conference-post-content" style="background-color: #fff; border-radius:10px;">
						<h4>Login to Vote</h4>
						<p>Gain access to the voting platform using the One-time-password sent to your email.<br/> If you already have your One-time-password, <a href="{{route('show_login_form')}}">click here</a> to login and vote</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<div class="conference-post-content" style="background-color: #fff; border-radius:10px;">
						<h4>Navigate to Voting page</h4>
						<p>After successful login, navigate to the voting page to select a category and sector by clicking "Vote" in the navigation tab at the top or <a href="{{route('show_vote')}}">click here</a></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<div class="conference-post-content" style="background-color: #fff; border-radius:10px;">
						<h4>Place your votes</h4>
						<p>Next page reveals the select category's awards and nominees. you can play your votes by selecting a nominee and clicking the 'vote' button on the award dropdown.</p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ========== SPEAKER & SCHEDULE END ========== -->
	<section class="s-our-speaker">
		<div class="container">
			<h2 class="title-conference"><span>Our Judges</span></h2>
			<div class="slider-our-speaker">
				@foreach($judges as $judge)
				<div class="slide-our-speaker">
					<div class="our-speaker-item">
						<img src="public/assets/images/judges/{{$judge->path_to_image}}" alt="img" style="height: 360px;">
						<div class="speaker-item-info" style="padding-bottom:10px;">
							<h5 class="name" style="font-size:18px; margin-bottom:6px;">{{$judge->name}}</h5>
							<p class="prof" style="font-size:16px; line-height:1rem;margin-bottom:6px;">{{$judge->position}}</p>
							<div class="meta">
								@if($judge->ln_link != '')
								<span class="post-tag" style="margin-right:7px;">
									<a href="{{$judge->ln_link}}">
										<i class="mdi mdi-linkedin mdi-24px" style="color:#fff" aria-hidden="true"></i>
									</a>
								</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients s-partners">
		<div class="container">
			<h2 class="title-conference"><span>Our Sponsors</span></h2>
			<div class="clients-cover">
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/BIMSIXLogo.jfif')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/Logo-NeptuneMFB.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/PassageNigeria.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/rahila_logo.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/portreclogo.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/oystercheckslogo.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/tmc_academy.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/tmc_company.png')}}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{asset('public/assets/images/sponsors/tyne_prints.png')}}" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-CLIENTS END =================-->

	<!--==================== FOOTER ====================-->
	@include('partials.voter.footer')
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="mdi mdi-chevron-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="{{asset('public/assets/js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('public/assets/js/slick.min.js')}}"></script>
	<script src="{{asset('public/assets/js/rx-lazy.js')}}"></script>
	<script src="{{asset('public/assets/js/parallax.min.js')}}"></script>
	<script src="{{asset('public/assets/js/scripts.js')}}"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
</body>

</html>