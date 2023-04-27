<!DOCTYPE html>
<html lang="en">
@section('title', 'Pictures')

<head>
    @include('partials.voter.head')
    <link href="{{asset('public/assets/css/model-new.css')}}" rel="stylesheet" />
</head>

<body id="conference-page">
    <!-- =============== PRELOADER =============== -->
    <!-- <div class="page-preloader-cover">
        <div class="cssload-loader">
            <div class="cssload-inner">
                <img class="ball" src="{{asset('public/assets/images/grc_awards_logo.png')}}" />
            </div>
        </div>

    </div> -->
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
                    <li>Media</li>
                </ul>
            </div>
            <h3 class="title">Media</h3>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Picture Gallery</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="post-item-cover wow fadeInUp" data-wow-duration=".35s" data-wow-delay=".4s">
                                <div class="post-header">
                                    <h6 class="title">
                                        <a href="{{route('show_pictures', ['award_program' => 1])}}">2021</a>
                                        {{-- <a href="{{route('show_pictures')}}">2021</a> --}}
                                    </h6>
                                    <div class="post-thumbnail">
                                        {{-- <a href="{{route('show_pictures'), )}}"> --}}
                                            <a href="{{route('show_pictures', ['award_program' => 1])}}">
                                            <img src="{{asset('uploads/DP0J1703.JPG')}}" alt="img">
                                        </a>
                                    </div>
                                </div>
                                
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
    <!-- <script src="{{asset('public/assets/js/modal.js')}}"></script> -->
    <script src="{{asset('public/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('public/assets/js/app.min.js')}}"></script>


</body>

</html>