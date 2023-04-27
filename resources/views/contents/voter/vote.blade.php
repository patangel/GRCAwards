<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Vote')
@section('style')
<link rel="stylesheet" href="{{asset('public/assets/css/accordion.css')}}">
@endsection
@section('style')
<style>
	.event-schedule-item .schedule-item-info:before {
		background-image: url('');
	}
</style>
@endsection

<head>
	@include('partials.voter.head')
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
	<!-- Page title -->
	<div class="page-title" style="background-color:#D4AF37">
		<div class="container">
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{route('landing.index')}}">Home</a></li>
					<li>Vote</li>
				</ul>
			</div>
			<h1 class="title">Vote</h1>
		</div>
	</div>
	<!-- page title -->

	<section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 blog-cover">
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title">Vote</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p><strong>VOTING ELIGIBILITY: </strong> The general public is welcome to vote. <strong>Voting will be open from 20th October and ends 19th November, 2021.</strong> Only votes in accordance with the voting limit & rules will be recognised.</p>
								<p>Three(3) Nominees will be shortlisted from the votes on each sub-category and deliberated upon by the judges based on defined criteria, inorder to select the winners. The winners will be unveiled at the Award Ceremony which will hold on the 9th December, 2021.</p>
							</div>
						</div>
					</div>
					<div style="max-width: 955px; margin-right:auto;margin-left:auto;">
						<div class="row">
							@foreach($categories as $category)
							<div class="col-md-6">
								<div class="accordion-wrapper" style="margin-top: 30px;">
									<div class="accordion">
										<input class="in-check" type="checkbox" name="radio-a" id="{{$category->hashid}}">
										<label class="accordion-label" for="{{$category->hashid}}">{{$category->name}}</label>
										<div class="accordion-content">
											<div class="buy-ticket-left">
												<p>{{$category->description}}</p><br>
												@if($category->id != 6)
												<p>The following sectors are available on this category. <br><strong>Please select a sector</strong></p>
												<div class="ticket-contact-cover">
													<div class="ticket-contact-item">
														@foreach($category->sectors as $sector)
														<div class="event-schedule-item">
															<div class="" style="width: 100%;padding: 10px 14px ;cursor: pointer;position: relative;">
																<a href="{{route('show_awards', $sector->hashid)}}">
																	<h6 style="-webkit-transition: .35s ease;transition: .35s ease;font-weight: 400;position: relative;padding-right: 20px;">{{$sector->name}}</h6>
																</a>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@else
												<p>The following positions are available on this category. <br><strong>Please select a position</strong></p>
												<div class="ticket-contact-cover">
													<div class="ticket-contact-item">
													@foreach($category->sectors as $sector)
														<div class="event-schedule-item">
															<div class="" style="width: 100%;padding: 10px 14px ;cursor: pointer;position: relative;">
																<a href="{{route('show_awards', $sector->hashid)}}">
																	<h6 style="-webkit-transition: .35s ease;transition: .35s ease;font-weight: 400;position: relative;padding-right: 20px;">{{$sector->name}}</h6>
																</a>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-12 blog-cover" style="margin-top:100px">
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title" style="color:red">Declaration</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p>We recognize that conflicts of interest can be a severe problem and we take them extremely seriously. We do everything we can to keep conflicts to a minimum while recognizing and rewarding the best. The organizers, partners/sponsors, and representatives of the GRC & Financial Crime Awards have no influence over the online vote in any form.
									Individuals and Organizations are recognized for their Governance, Risks management & Compliance and Financial Crime achievements, beneficial contributions to their sectors and the Nigerian economy at large.</p>
							</div>
						</div>
					</div>
					<div class="post-item-cover">
						<div class="widget widget-archive post-header">
							<h4 class="title" style="color:red">Security Warning!!!</h4>
						</div>
						<div class="post-content">
							<div class="text">
								<p>As stated, voting is open to the public. Every voter is entitled to <strong>only one vote </strong> on each Award Sub-category.</p>
								<p>As such, <span style="color:red">The use of devices/softwares such as VPNs, software generated or programmed scripts </span> to manipulate votes is prohibited. However, we have employed the use of advance technologies to counter this situation and make sure votes are secure and counted correctly. </p>
								<p>GRC & Financial Crime Awards reserves the exclusive right to disqualify any Individual(s) or Organization(s) if they are in violation of the voting rules.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
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