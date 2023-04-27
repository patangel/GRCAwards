<!DOCTYPE html>
<html lang="zxx">
@section('title', 'FAQs')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
@endsection

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
                    <li>FAQs</li>
                </ul>
            </div>
            <h1 class="title">FAQs</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="widget widget-archive post-header">
                        <h4 class="title">FAQs</h4>
                    </div>
                    <div class="post-item-cover">
                        <div class="accordion-wrapper" style="margin-top: 30px;">
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="1" />
                                <label class="accordion-label" for="1">What is the entry criteria?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>Worldwide entries are accepted.<br>Categogry-specific criteria can be found detailed in the category descriptions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="2" />
                                <label class="accordion-label" for="2">How much does it cost to enter?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">

                                            <p>
                                                Absolutely nothing!
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="3" />
                                <label class="accordion-label" for="3">What is the entry deadline?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>The entry deadline is 19th November 2021 at 23:59pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="4" />
                                <label class="accordion-label" for="4">Can I save my entry?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>Yes! Our entry platform allows you to save your application and come back to it before submitting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="5" />
                                <label class="accordion-label" for="5">Can I enter more than one category?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>Providing you meet the criteria for each category, yes! You're free to enter as many as you like.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="6" />
                                <label class="accordion-label" for="6">What are supporting documents?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>The supporting documents are not a compulsory part of the application. It won't count against you if you do not include any, but they can help to illuminate your entry.</p>
                                            <p>Supporting documents could be testimonials, examples of press coverage, explainer videos, or impact reports, for example.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="7" />
                                <label class="accordion-label" for="7">Can I alter my application after submitting?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>Yes, you can make changes to your application after submitting right up until the entry deadline.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="accordion">
                                <input class="in-check" type="checkbox" name="radio-a" id="8" />
                                <label class="accordion-label" for="8">How are winners chosen?</label>
                                <div class="accordion-content">
                                    <div class="ticket-contact-cover">
                                        <div class="ticket-contact-item">
                                            <p>Three(3) Nominees will be shortlisted from the votes on each sub-category and deliberated upon by the judges based on defined criteria, inorder to select the winners. The winners will be unveiled at the Award Ceremony which will hold on the 9th December, 2021.</p>
                                        </div>
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