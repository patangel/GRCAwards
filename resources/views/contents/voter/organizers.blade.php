<!DOCTYPE html>
<html lang="zxx">
	@section('title', 'About the Award')

<head>
	@include('partials.voter.head')
</head>
<body id="conference-page">
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
					<li>The Organizers</li>
				</ul>
			</div>
			<h1 class="title">The Morgans Consortium (TMC)</h1>
		</div>
	</div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 blog-cover">
					<div class="post-item-cover">
                        <div class="widget widget-archive post-header">
							<h4 class="title">TMC Mission Statement </h4>
						<span><a href="https://morgansconsortium.com">visit our website</a></span></div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
								<p>TMC core mission statement includes the attainment of clients’ desires in whatever industry they operate. We are closer to our clients than any of our peers rendering one-on-one business consultancy that embraces all sectors without any discriminations. TMC adheres to principles that promote professionalism, knowing our expertise depends on services to our customers.</p>
								<p>TMC considers our clients as partners whose partnering is vital to our organisational vision and mission. Our professional tactics include predicting clients’ feedback with the view of applying strategies and corrective measurements that eliminate potential conflicts with our clients boosting our clients' satisfaction rate, which is incomparable to none.</p>
								<p>At TMC Consultancy, we adhere to a legitimacy culture concerning our roles to clients and constitutional authorities such as to the Federal Board of Inland Revenue/ State Inland Revenue Board. We update our clients concerning changes from statutory authorities affecting their businesses and guide them on how to comply with the Federal Board of Inland Revenue/ State Inland Revenue Board and Companies regulations.</p>
								<p>TMC provides its employees with the best incentives demonstrating love and care. We do not demonstrate favouritism and discrimination to any member of our staff. We encourage diversity and appreciate the core uniqueness inherent in each staff member.</p>
								<p>At TMC, we recognize our social responsibilities as a consultancy firm. We strongly support a healthy environment for humans and other species.</p>
								<p>Lastly, as a responsible corporate citizen, recognizing the economic importance of our environment. We do not employ the use of machines or equipment that are harmful to our environment.</p>
							</div>
						</div>
					</div>
					<div class="post-item-cover">
                        <div class="widget widget-archive post-header">
							<h4 class="title">TMC Company Values</h4></div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
									<p><strong>Professionalism:</strong> Our teams act with integrity and honesty, and focus on carrying out accounting consultancy tasks to deliver optimum customer satisfaction for our clients with public or private businesses.</p>

									<p><strong>Results-Oriented:</strong> Delivering outstanding consultancy results by cultivating a culture of professional execution and excellent performance that is rewarding our clients immensely with outcomes.</p>

									<p><strong>Integrity:</strong> At TMC, we are transparent, honest, and devoted to rendering optimum services for our clients resident in Nigeria and beyond. We achieve success through the application of various technologically updated apparatuses in delivering accurate and reliable financial advisory services. We have zero-tolerance for unprofessionalism, unnecessary mistakes or nonchalant job behaviour that hampers our responsibilities towards our clients.</p>

									<p><strong>Build Relationships/Deliver Results:</strong> Connect with clients who are not merely clients but partners that built the foundation of our successes in recent years. At TMC Consulting, we build relationships with our clients because we cannot do our jobs without our loyal clients. Our clients remain our most fabulous advertisers of professional consultancy services which have become a business fact known in Nigeria and other operating nations across the globe.</p>
							</div>
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