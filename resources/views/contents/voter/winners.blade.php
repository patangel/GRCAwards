<!DOCTYPE html>
<html lang="en">
@section('title', '2021 Winners')
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
                    <li>Winners</li>
                </ul>
            </div>
            <h1 class="title">2021 Winners</h1>
        </div>
    </div>
    <!-- page title -->

    <section class="s-news s-single-news" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="widget widget-archive post-header">
                            <h4 class="title">2021 Winners</h4>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 30px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1" />
                            <label class="accordion-label" for="category1">GRC & FINANCIAL CRIME PREVENTION EXCELLENCE AWARDS CATEGORY <br>(Commercial Banks)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Risk & Compliance Champion</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Guaranty Trust holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Fraud Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Standard Chartered Bank Nigeria Ltd.</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Risk & Compliance Educator</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Access Bank</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Anti-Bribery & Corruption Champion</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Stanbic IBTC Bank Ltd.</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category1-1" />
                            <label class="accordion-label" for="category1-1">GRC & FINANCIAL CRIME PREVENTION EXCELLENCE AWARDS CATEGORY <br>(Insurance)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                               
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Fraud Prevention</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Leadway Assurance Company Ltd.</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                    
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category2" />
                            <label class="accordion-label" for="category2">GRC & FINANCIAL CRIME PREVENTION JOURNEY AWARDS CATEGORY <br>(Commercial BankS)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Practice Leader Awards</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Visionary Awards</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3" />
                            <label class="accordion-label" for="category3">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(Commercial Banks)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Risk Management Team of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Olumide Oguntuase, Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Osa Aiwerioghene, Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Compliance Team of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>MLRO or Head of Anti-Financial Crime of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Osa Aiwerioghene, Guaranty Trust Holding Company</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Stanbic IBTC Bank Ltd.</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention/ AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Citibank Nigeria Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category3-1" />
                            <label class="accordion-label" for="category3-1">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(Insurance)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Samira Nwaturuocha, AXA Mansard Insurance Plc</a></li>                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                    
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>AIICO Insurance Plc</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category4" />
                            <label class="accordion-label" for="category4">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(Microfinance Banks)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention/AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Accion Microfinance Bank Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Abiodun Adetunji, AB Microfinance Bank Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Kehinde Olalere, Accion Microfinance Bank Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>AB Microfinance Bank Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category5" />
                            <label class="accordion-label" for="category5">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(Pension Industry)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention/AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Stanbic IBTC Pension Managers Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Efe Omoduemuke, Stanbic IBTC Pension Managers Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Edidiong Akan, Stanbic IBTC Pension Managers Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Stanbic IBTC Pension Managers Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category6" />
                            <label class="accordion-label" for="category6">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(Asset Management)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention/AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Emerging Africa Asset Management Limited</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Samira Nwaturuocha, AXA Mansard Investments Ltd</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>AXA Mansard Investments Ltd</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>AXA Mansard Investments Ltd</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category7" />
                            <label class="accordion-label" for="category7">GRC & FINANCIAL CRIME PREVENTION ACHIEVEMENT AWARDS CATEGORY <br>(FinTech)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention/AML Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                            <li><a>Interswitch</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Risk Officer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Griffith Ehebha, Interswitch</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Chief Compliance Officer of the year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Oluwafemi Aminu, eTranzact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Employer of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Kuda</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category8" />
                            <label class="accordion-label" for="category8">GRC & FINANCIAL CRIME PREVENTION PROVIDERS AWARDS CATEGORY <br>(Training)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC Training Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Financial Institutions Training Centre (FITC)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Financial Crime Prevention Training Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Compliance Institute Nigeria</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category8-1" />
                            <label class="accordion-label" for="category8-1">GRC & FINANCIAL CRIME PREVENTION PROVIDERS AWARDS CATEGORY <br>(Software)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best GRC Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Mitiget</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>Best Financial Crime Prevention Solution Provider of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Sanction Scanner</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category9" />
                            <label class="accordion-label" for="category9">GRC & FINANCIAL CRIME PREVENTION PROMOTERS AWARDS CATEGORY <br>(Media)</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-6">
                                                        <h6>AWARDS UNDER THIS CATEGORY</h6>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Anti-Financial Crime Reporter of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>David Hundeyin</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-6">
                                                        <p>GRC & Anti-Financial Crime TV Programme/Station of the Year</p>
                                                    </div>
                                                    <div class="col-6 widget-archive">
                                                        <ul style="font-size: 14px;">
                                                        <li><a>Channels TV</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-wrapper" style="margin-top: 10px;">
                        <div class="accordion">
                            <input class="in-check" type="checkbox" name="radio-a" id="category10" />
                            <label class="accordion-label" for="category10">SPECIAL RECOGNITION AWARD FOR GOVERNORS SUPPORTING GRC & ANTI-FINCRIME INITIATIVES</label>
                            <div class="accordion-content">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom:30px">
                                        <div class="buy-ticket-form">
                                            <div class="ticket-contact-item">
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding-top:15px;padding-bottom:15px;background-color:#d9edf7">
                                                    <div class="col-12 widget-archive">
                                                        <h6>WINNERS</h6>
                                                    </div>
                                                </div>
                                                
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-12">
                                                        <p>Babajide Sanwo-Olu, Lagos State Governor</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="pay-method row" style="overflow-wrap: break-word; margin:initial;padding:0px;border-top:0px;">
                                                    <div class="col-12">
                                                        <p>Prof. (Engr.) Babagana Umar Zulum, Borno State Governor</p>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
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