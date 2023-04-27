<!DOCTYPE html>
<html lang="zxx">
@section('title', 'Vote')
@section('style')
<link rel="stylesheet" href="{{asset('assets/css/accordion.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                    <li><a href="{{route('show_vote')}}">Categories</a></li>
                    <li>Awards</li>
                </ul>
            </div>
            <h1 class="title">Awards</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">{{$sector->category->name}} ({{$sector->name}})</h4>
                        </div>
                        <div class="post-content">
                            <div class="text">
                                <p>{{$sector->category->description}}</p>
                                <p><strong>NOTE: </strong> You have only one vote under each sub-category</p>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($awards as $award)
                <div class="col-md-6">
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="{{$award->hashid}}1">
                            <label class="accordion-label" for="{{$award->hashid}}1">{{$award->name}}</label>
                            <div class="accordion-content">
                                <p> {{$award->id == 33 || $award->id == 34 || $award->id == 39 ? '' : $award->description}}</p>
                                <h6>Award Criteria</h6>
                                <p>{{$award->criteria}}</p>
                                <form action="{{route('landing.index')}}" id="{{$award->hashid}}2">
                                    <div class="buy-ticket-left">
                                        <p>{{$award->id ==33 || $award->id ==34 ? '' : 'The following are the nominees for this Award sub-category.' }}</p>
                                        <p><strong>Please place your vote by {{$award->id ==33 || $award->id ==34 ? 'stating the name of your nominee and clicking the "Vote" button' : 'selecting a nominee and clicking the "Vote" button after the list' }}.</strong></p>
                                        <div class="ticket-contact-item" style="margin-right:0px">
                                            <div class="buy-ticket-form">
                                                @csrf
                                                @if ($award->id == 33 || $award->id ==34)
                                                <div class="pay-method">
                                                    <ul class="form-cover" style="justify-content: flex-start;flex-direction:column;">
                                                        <li class="inp-email footer-subscribe">
                                                            <input id="nominee" type="text" name="{{$award->hashid}}" style="width:100%" placeholder="Enter your Nominee" required>
                                                            @error('token')
                                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                                {{ $message }}
                                                            </span>
                                                            @enderror
                                                        </li>
                                                    </ul>
                                                </div>
                                                @else
                                                <div class="pay-method">
                                                    @foreach($nominees as $nominee)
                                                    @if(in_array($award->id, json_decode($nominee->award_ids)))
                                                    <div class="pay-item">
                                                        <input type="radio" name="{{$award->hashid}}" data-id="{{$nominee->hashid}}" value="{{$nominee->hashid}}">
                                                        <span></span>
                                                        <p class="nominee">{{$nominee->name}}</p>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                    @endif
                                            </div>
                                        </div>
                                        <div style="text-align:center">
                                            <button id="{{$award->id == 33 || $award->id ==34 ? '#SubmitNominee' : '#Submit'}}" type="submit" data-id="{{$award->hashid}}" class="btn"><span>Vote</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('assets/js/scripter.js')}}"></script>
</body>

</html>