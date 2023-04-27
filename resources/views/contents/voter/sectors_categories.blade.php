<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Categories')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
@endsection

<head>
    @include('partials.voter.head')
</head>

<body id="conference-page" style="background-image: url(assets/images/conference_bg.svg);">
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
                    <li>Categories</li>
                </ul>
            </div>
            <h1 class="title">Categories</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">Categories</h4>
                        </div>
                        <div class="post-content">
                            <div class="text">
                                <p>The GRC & FinCrime Prevention Awards will be presented to several sectors that employ/incorporate Governance, Risk management, Compliance and Financial Crime Prevention mechanisms in their business activities.</p>
                                <p>The GRC & FinCrime Prevention Awards comprises of six categories of awards with various subcategories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        @foreach($categories as $category)    
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="{{$category->hashid}}"/>
                            <label class="accordion-label" for="{{$category->hashid}}">{{$category->name}}</label>
                            <div class="accordion-content">
                            <p>{{$category->description}}</p>
                                <div class="row">
                                    @foreach($category->sectors as $sector)
                                    <div class="col-md-6" style="margin-bottom:30px">
                                        <div class="buy-ticket-left">
                                            <div class="ticket-contact-cover" style="padding-top:10px;">
                                                <div class="ticket-contact-item">
                                                    <h6>{{$sector->id == 12 ? '': $sector->name.' Awards' }}</h6>
                                                    <ul style="font-size: 14px;">
                                                        @if($sector->awards->isEmpty())
                                                            <li></li>
                                                        @else
                                                        @foreach($sector->awards as $award)
                                                        <li>
                                                            <i class="mdi mdi-chevron-right"></i>
                                                            {{$award->name}}
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
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