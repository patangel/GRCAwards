<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Sponsors')
@section('style')
<link rel="stylesheet" href="{{asset('public/assets/css/accordion.css')}}">
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
                    <li>Sponsors</li>
                </ul>
            </div>
            <h1 class="title">Sponsors</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="widget widget-archive post-header">
                        <h4 class="title">Our Sponsors</h4>
                    </div>
                    <div class="instagram-cover">
                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/Logo-NeptuneMFB.png')}}" data-src="{{asset('public/assets/images/sponsors/Logo-NeptuneMFB.png')}}" alt="img">
                        </a>
                        <a href="#" class="instagram-item">

                            <img class="rx-lazy" src="{asset('public/assets/images/sponsors/BIMSIXLogo.jfif')}}" data-src="{{asset('public/assets/images/sponsors/BIMSIXLogo.jfif')}}" alt="img">
                        </a>
                        <a href="#" class="instagram-item">

                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/PassageNigeria.png')}}" data-src="{{asset('public/assets/images/sponsors/PassageNigeria.png')}}" alt="img">
                        </a>
                        <a href="#" class="instagram-item">

                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/rahila_logo.png')}}" data-src="{{asset('public/assets/images/sponsors/rahila_logo.png')}}" alt="img">
                        </a>
                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/portreclogo.png')}}" data-src="{{asset('public/assets/images/sponsors/portreclogo.png')}}" alt="img">
                        </a>

                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/oystercheckslogo.png')}}" data-src="{{asset('public/assets/images/sponsors/oystercheckslogo.png')}}" alt="img">
                        </a>

                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/tmc_academy.png')}}" data-src="{{asset('public/assets/images/sponsors/tmc_academy.png')}}" alt="img">
                        </a>

                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/tmc_company.png')}}" data-src="{{asset('public/assets/images/sponsors/tmc_company.png')}}" alt="img">
                        </a>

                        <a href="#" class="instagram-item">
                            <img class="rx-lazy" src="{{asset('public/assets/images/sponsors/tyne_prints.png')}}" data-src="{{asset('public/assets/images/sponsors/tyne_prints.png')}}" alt="img">
                        </a>
                    </div>



                    <div class="post-item-cover">

                        <div class="widget widget-archive post-header" id="sponsorshipPackages">
                            <h4 class="title">Sponsorship Packages</h4>
                        </div>
                        <div class="accordion-wrapper" style="margin-top: 30px;">

                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="1" />
                                <label class="accordion-label" for="1">Gold</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <ul style="font-size: 14px;">
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Awards category named after company/organisation.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Award presentation on chosen category on the awards night.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    High qualty colour adverts and company profile in the awards brochure (One Page).
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Company branding at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Logo branding on all pre-marketing materials: brochure, web advertising banners, social media networking sites - Facebook, LinkedIn and instagram.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    10 seconds static advert shown on screen at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Mention as a sponsor on the GRC & Financial Crime Preventiion Awards social media platforms
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Complimentary VIP tickets to the awards event (6)
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Press release announcting partnership
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Red carpet interviews and opportunity to network with dignitaries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div style="margin-top:10px">
                                        <a href="{{route('show_contact')}}" class="btn btn-yellow"><span>Send us a Message</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="2" />
                                <label class="accordion-label" for="2">Silver</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">

                                            <ul style="font-size: 14px;">
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Awards category named after company/organisation.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Award presentation on chosen category on the awards night.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    High qualty colour adverts and company profile in the awards brochure (Half Page).
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Company branding at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Logo branding on all pre-marketing materials: brochure, web advertising banners, social media networking sites - Facebook, LinkedIn and instagram.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    10 seconds static advert shown on screen at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Mention as a sponsor on the GRC & Financial Crime Preventiion Awards social media platforms
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Complimentary VIP tickets to the awards event (4)
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Press release announcting partnership
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Red carpet interviews and opportunity to network with dignitaries
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div style="margin-top:10px">
                                        <a href="{{route('show_contact')}}" class="btn btn-yellow"><span>Send us a Message</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="3" />
                                <label class="accordion-label" for="3">Bronze</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">

                                            <ul style="font-size: 14px;">
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Awards category named after company/organisation.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Award presentation on chosen category on the awards night.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    High qualty colour adverts and company profile in the awards brochure (Quarter Page).
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Company branding at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Logo branding on all pre-marketing materials: brochure, web advertising banners, social media networking sites - Facebook, LinkedIn and instagram.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    10 seconds static advert shown on screen at awards venue.
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Mention as a sponsor on the GRC & Financial Crime Preventiion Awards social media platforms
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Complimentary VIP tickets to the awards event (2)
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Press release announcting partnership
                                                </li>
                                                <li>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                    Red carpet interviews and opportunity to network with dignitaries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div style="margin-top:10px">
                                        <a href="{{route('show_contact')}}" class="btn btn-yellow"><span>Send us a Message</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header" id="becomeASponsor">
                            <h4 class="title">Why become a sponsor?</h4>
                        </div>
                        <div class="post-content">
                            <div class="text" style="text-align: justify;">
                                <p>The GRC & Financial Crime Prevention Awards sponsors will have an oppotunity to network at the awards event with over 100 captains and C-suites executives of corporate firms in Nigeria. Other benefits include:</p>
                                <div class="ticket-contact-cover">
                                    <div class="ticket-contact-item">
                                        <ul style="font-size: 14px;">
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Return on investment (ROI)
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Audience Insights
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Direct access to corporate business leaders and networks
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Lead generation
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Social media/website traffic/focused content strategy
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Opportunities for sales closing with warm prospects
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                highlighting a product or service offering
                                            </li>
                                            <li>
                                                <i class="mdi mdi-chevron-right"></i>
                                                Brand building
                                            </li>
                                        </ul>
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