<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Privacy Policy')

<head>
    @include('partials.voter.head')
</head>

<body id="conference-page">
    <!-- =============== PRELOADER =============== -->
    <div class="page-preloader-cover">
        <div class="cssload-loader">
            <div class="cssload-inner">
                <img class="ball" src="{{asset('assets/images/grc_awards_logo.png')}}" />
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
                    <li>Privacy policy</li>
                </ul>
            </div>
            <h1 class="title">Privacy Policy</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="widget widget-archive post-header">
                        <h4 class="title">Privacy Policy</h4>
                    </div>
                    <!-- <div class="post-item-cover"> -->
                       <ul style="font-size: 14px;">
                           <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               We collect the personal information that you provide to us.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               Some information — such as your Internet Protocol (IP) address and/or browser and device characteristics — is collected automatically when you visit our website.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               We may collect limited data from public databases, marketing partners, and other outside sources.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               We aim to protect your personal information through a system of organizational and technical security measures.
                            </li>
                       </ul>
                    <!-- </div> -->
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