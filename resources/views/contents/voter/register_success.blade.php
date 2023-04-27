<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register Success | GRCFinCrimeAwards</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body id="home">
    <header class="conference-header-fixed" style="background-color:#272727;">
        <a href="#" class="nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="container">
            <div class="row conference-header-row">
                <div class="col-sm-3 col-lg-2 col-xl-3">
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets/images/grc_awards_logo.png')}}" alt="logo" style="height:100px; width:100px; position:absolute;"/>
                    </a>
                </div>
                <div class="col-sm-9 col-lg-10 col-xl-9">
                    <nav class="nav-menu menu">
                        <ul class="nav-list" style="justify-content:flex-end;">

                        <div class="conference-header-btn">
                                <a href="{{route('show_register_form')}}" class="" style="margin-right:30px; font-size:14px; font-weight:500; align-self:center;text-transform:uppercase">
                                    <span>Register</span>
                                </a>
                                <a href="{{route('show_login_form')}}" class="btn">
                                    <span>login</span>
                                </a>

                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="s-conference-mission" style="background-image: url(assets/images/bg-about-home2.png);">
        <div class="s-our-mission ">
            <div class="container">
                <div class="row" style="max-width: 955px; margin-right:auto;margin-left:auto;">
                    <div class="col-lg-6 our-mission-info" style="text-align: left;">
                        <h1 style="margin-bottom: 20px; font-size:32px">Thank You For Signing Up!</h1>
                        <h2 style="margin-bottom: 20px; font-size: 18px;">Your access token has been sent to your email (<strong>{{session()->get('email')}}</strong>)</h2>
                        <div class="mission-info-text">
                            <p style="margin-bottom: 20px;">Note: If you do not receive the email in few minutes: </p>
                        </div>
                        <div class="mission-info-text">
                            <ul class="mission-list">
                                <li><i class="mdi mdi-chevron-right" style="font-size:18px; top:0;"></i>check spam folder</li>
                                <li><i class="mdi mdi-chevron-right" style="font-size:18px; top:0;"></i>verify if you typed your email correctly</li>
                                <li><i class="mdi mdi-chevron-right" style="font-size:18px; top:0;"></i>if you can't resolve the issue, please contact <a href="mailto:support@grcfincrimeawards.com" target="_blank" rel="noopener noreferrer">support@grcfrincrimeawards.com</a>.</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6 our-mission-img mission-list-cover" style="justify-content: end;">
                        <span>
                            <img src="{{asset('assets/images/placeholder-all.png')}}" data-src="{{asset('assets/images/our-mission-2.svg')}}" alt="" class="mission-img-effect-1 rx-lazy">
                            <img class="mission-img rx-lazy" src="{{asset('assets/images/placeholder-all.png')}}" data-src="{{asset('assets/images/mail_success.svg')}}" alt="img">
                            <img src="{{asset('assets/images/placeholder-all.png')}}" data-src="{{asset('assets/images/tringle-gray-little.svg')}}" alt="" class="about-img-effect-2 rx-lazy">
                        </span>
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
    <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/js/rx-lazy.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@if(Session::has('warning'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": false,
            "preventDuplicates": true,
            "preventOpenDuplicates": true,
			"positionClass": "toast-top-center",
			"showMethod": "slideDown"
        }
        toastr.warning("{{ session('warning') }}");
    </script>
    @endif

	@if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": false,
            "preventDuplicates": true,
            "preventOpenDuplicates": true,
			"positionClass": "toast-top-center",
			"showMethod": "slideDown"
        }
        toastr.success("{{ session('success') }}");
    </script>
    @endif

</body>

</html>