<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Terms & Conditions')

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
                    <li>Terms and Conditions</li>
                </ul>
            </div>
            <h1 class="title">Terms and Conditions</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="widget widget-archive post-header">
                        <h4 class="title">Terms and Conditions</h4>
                    </div>
                       <ul style="font-size: 14px;">
                           <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               All materials, presentations, and speeches made by event speakers and trainers are and remain, the intellectual property of the organisers.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               The organizers reserves the right to cancel, suspend or change the operation of our obligations to you if events occur which are like force majeure fire, flood, storms, plant breakdowns, strikes, lockouts, riot, hostilities, non-availability of material or suppliers, or any event outside of our control; and we shall not be held liable for any breach of contract or tort resulting from such an event.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               You have the right to ask us not to process personal data for marketing purposes.
                            </li>
                            <li style="line-height:32px">
                               <i class="mdi mdi-chevron-right"></i>
                               You agree to all the terms & conditions set out by TMC in place of awards or event registration provided.
                            </li>
                        </ul>
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