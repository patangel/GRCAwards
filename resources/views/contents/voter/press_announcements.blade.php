<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Press Announcements')

<head>
	@include('partials.voter.head')
</head>

<body id="conference-page">
	<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
	<!-- ============== PRELOADER END ============== -->
	<!-- ================= HEADER ================= -->
	@include('partials.voter.topbar')
	<!-- =============== HEADER END =============== -->
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Press</li>
				</ul>
			</div>
			<h1 class="title">Press announcements</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">Press Announcements</h4>
						</div>
						<div class="post-content">
                        <div class="buy-ticket-form">
							<ul class="form-cover">
								<li class="pay-method" style="border-top:0px;">
									<div class="pay-item" style="margin-bottom: 0px;">
										<P>September 15, 2021</p>
									</div>
									<a href="https://businessday.ng/companies/article/tmc-organises-grc-fincrime-prevention-awards-to-promote-excellence/" target="_blank" style="word-break: break-word;">https://businessday.ng/companies/article/tmc-organises-grc-fincrime-prevention-awards-to-promote-excellence/</a>	

								</li>
                                <li class="pay-method" style="border-top:0px;padding-top:0px;padding-left:0px;padding-right:0px;padding-bottom:26px;">
									<div class="pay-item" style="margin-bottom: 0px;">
										<P>September 14, 2021</p>
									</div>
									<a href="https://www.pulse.ng/news/local/maiden-edition-of-governance-risk-compliance-and-financial-crime-prevention-award-to/qcf2q5j" target="_blank" style="word-break: break-word;">https://www.pulse.ng/news/local/maiden-edition-of-governance-risk-compliance-and-financial-crime-prevention-award-to/qcf2q5j</a>

								</li>
                                <li class="pay-method" style="border-top:0px;padding-top:0px;padding-left:0px;padding-right:0px;padding-bottom:26px;">
									<div class="pay-item" style="margin-bottom: 0px;">
										<P>September 11, 2021</p>
									</div>
									<a href="https://guardian.ng/news/why-we-instituted-grc-fincrime-prevention-awards/" target="_blank" style="word-break: break-word;">https://guardian.ng/news/why-we-instituted-grc-fincrime-prevention-awards/</a>
								</li>
								<li class="pay-method" style="border-top:0px;padding-top:0px;padding-left:0px;padding-right:0px;padding-bottom:26px;">
									<div class="pay-item" style="margin-bottom: 0px;">
										<P>September 10, 2021</p>
									</div>
									<a href="https://www.vanguardngr.com/2021/09/tmc-organises-grc-and-fincrime-prevention-awards-to-encourage-standards/" target="_blank" style="word-break: break-word;">https://www.vanguardngr.com/2021/09/tmc-organises-grc-and-fincrime-prevention-awards-to-encourage-standards/</a>	
								</li>
							</ul>
					</div>
						</div>
					</div>			
				</div>
				<!--================= SIDEBAR =================-->
				@include('partials.voter.sidebar')
				<!--=============== SIDEBAR END ===============-->
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