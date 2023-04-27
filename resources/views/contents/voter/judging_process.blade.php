<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Judging Process')

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
					<li>Judging Process</li>
				</ul>
			</div>
			<h1 class="title">The Judging Process</h1>
		</div>
	</div>
	<!-- page title -->
	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					
					<div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">Judging/Selection of Awardees</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
							<p>The general public is allowed to vote via the GRC & Financial Crime Prevention Awards secured online voting platform. Nominations will be collated and Nominees with the highest votes will be contacted to inform them of the category of award they are being nominated for, the criteria for each of the awards and they will be required to provide documentation evidences to show that they meet the criteria of the various categories of Awards.</p>
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