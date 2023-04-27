<!DOCTYPE html>
<html lang="en">
@section('title', 'Judges')

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
                    <li>Judges</li>
                </ul>
            </div>
            <h3 class="title">Our Judges</h3>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Meet Our Judges</h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($judges as $judge)
                        <div class="col-md-6">
                            <div class="slide-our-speaker">
                                <div class="our-speaker-item">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#j{{$judge->hashid}}">
                                    <img src="{{asset('public/assets/images/judges')}}/{{$judge->path_to_image}}" alt="img" style="height: 360px;">
                                    <div class="speaker-item-info" style="padding-bottom:10px;">
                                            <h5 class="name" style="font-size:18px">{{$judge->name}}</h5>
                                            <p class="prof" style="font-size:16px; color:white">{{$judge->position}}</p>
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
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="post-item-cover">

						<div class="widget widget-archive post-header">
							<h4 class="title">Selection of panel of judges</h4>
						</div>
						<div class="post-content">
							<div class="text" style="text-align: justify;">
							<p>The awards are judged by an independent panel of judges who are representative of all areas of the industry by sector and by geography. Members of this panel choose to contribute on a voluntary basis and will remain entirely separate from the ownership structure of the awards.</p>
                            <p>The panel is led by Mr Adebisi Jelili and new members are added regularly. Register for updates so we can keep you up to date on new judging appointments.</p>

							</div>
						</div>
					</div>
                    <div class="widget widget-archive">
						<h4 class="title">Joining the panel of judges</h4>
                        <p>If you would like to offer your industry knowledge and experience as a member of the Industry Judging Panel, please contact us with a summary of your experience and the category that you would like to judge. If a vacancy exists that may be suitable then we will forward your information to the Co-Chairs of Judges for a decision.</p>
                        <a class="btn btn-yellow" href="{{route('show_contact')}}">Send us a message</a><br><br>
                        <p><strong>Please Note</strong><br>
                        All members of the Panel must be approved by the Co-Chairs of Judges, who consider the skills, experience and balance of the Panel as a whole. Any decision to not accept an application is therefore not a reflection on the quality of the applicant.
                        </p>
                        <p>The integrity of the Industry Judging Panel is of paramount importance and, with this in mind, all Judges are required to abide by terms and conditions covering confidentiality, conflicts of interest and the conduct expected of Judges.</p>
                    </div>
                    <div class="widget widget-archive">
						<h4 class="title">Declaration</h4>
                        <p style="color: red;">The Industry Judging Panel is independent from the production and management of the GRC & Financial Crime Prevention Awards Event. Members of the organising committee and the management company appointed to project manage the Awards Event, may not hold a position on the Industry Judging Panel.</p>
                    </div>
                </div>
                <!--================= SIDEBAR =================-->
                @include('partials.voter.sidebar')
                <!--=============== SIDEBAR END ===============-->
            </div>
        </div>
    </section>

    @foreach($judges as $judge)
    <div class="modal fade" id="j{{$judge->hashid}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title" id="modal-title">Judge profile</h5>
                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close-circle mdi-24px" style="color: red;"></i></a>
                </div>

                <div class="modal-body px-4 pb-4 pt-0">
                    <section class="s-our-mission s-about-speaker" style="padding:0px">
                        <div class="row" style="flex-direction: column;">
                            <div class="col-lg-12 our-mission-img">
                                <span>
                                    <img class="mission-img" src="{{asset('public/assets/images/judges')}}/{{$judge->path_to_image}}" alt="img" style="width: 200px;height:200px;border-radius:50%;align-self:center">
                                </span>
                            </div>
                            <div class="col-lg-12 our-mission-info">
                                <h6>{{$judge->name}} - {{$judge->position}}</h6>
                                <div class="mission-info-text">
                                    <p>{{$judge->profile}}</p>
                                </div>
                                <ul class="social-list">
                                    @if($judge->ln_link != '')
                                    <li>
                                        <a target="_blank" href="{{$judge->ln_link}}">
                                            <i class="mdi mdi-linkedin mdi-24px"></i>
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

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