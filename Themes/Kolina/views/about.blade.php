@extends('layouts.master')

@section('title')
    Sobre | @parent
@stop

@section('content')
    <!-- Banner -->
    <div class="banner banner-static has-bg bg-primary">
        <div class="banner-cpn">
            <div class="container">
                <div class="content row">

                    <div class="banner-text">
                        <h1 class="page-title">About Consulting Expert</h1>
                        <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dicta aute irure dolor nostrud .</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active"><span>Sobre</span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="banner-bg imagebg">
            <img src="{{ Theme::url('img/banner-inner.jpg') }}" alt="" />
        </div>
    </div>
    <!-- End Banner -->

    <!-- Content -->
    <div class="section section-contents section-pad">
        <div class="container">
            <div class="content row">

                <div class="col-sm-7 npl res-m-bttm">
                    <h2>We have experience to deliver the best services you need to move forward.</h2>
                    <p>Through gaining experience in various economic periods, our team are able to identify the best opportunities whether we are in good times or bad times. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
                    <p>We achieved our success because of how successfully we integrate with our clients. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
                </div>
                <div class="col-sm-5 npr">
                    <img alt="" src="{{ Theme::url('img/service-f.jpg') }}">
                </div>

            </div>
        </div>
    </div>
    <!-- End content -->
    <!-- Content -->
    <div class="section section-contents section-pad bg-light">
        <div class="container">
            <div class="content row center">
                <h2 class="heading-section">Our Smart Approach</h2>
                <div class="gaps size-sm"></div>
                <div class="row">
                    <div class="col-sm-4 res-s-bttm">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-diamond" aria-hidden="true"></em>
                            </div>
                            <h4>Experienced Consultant</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
                        </div>

                    </div>
                    <div class="col-sm-4 res-s-bttm">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-check-square" aria-hidden="true"></em>
                            </div>
                            <h4>Reliable &amp; Trustworthy</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-bolt" aria-hidden="true"></em>
                            </div>
                            <h4>20 years of experience</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam laud accusan tiud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->
    <!-- Why Choose -->
    <div class="section section-contents section-pad light has-bg fixed-bg" style="background-image: url('{{  Theme::url('img/plx-dark.jpg') }}')">
        <div class="container">
            <div class="content row center">

                <h2 class="heading-section">Why Choose Us</h2>
                <div class="gaps size-sm"></div>
                <div class="feature-intro">

                    <div class="row">
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-briefcase" aria-hidden="true"></em>
                            </div>
                            <h4>Business Service Consulting</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam.</p>
                        </div>
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-black-tie" aria-hidden="true"></em>
                            </div>
                            <h4>Financial Services Consulting</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam.</p>
                        </div>
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-cogs" aria-hidden="true"></em>
                            </div>
                            <h4>Advanced Analytics &amp; Reports</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam.</p>
                        </div>
                        <div class="col-sm-3">
                            <div class="icon-box style-s2">
                                <em class="fa fa-building" aria-hidden="true"></em>
                            </div>
                            <h4>Quality &amp; Innovation Solutions</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tiudo lorem quveniamv eniam.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose -->

    <!-- Testimonials -->
    <div class="section section-quotes section-pad bg-light">
        <div class="container">
            <div class="content row center">

                <h2 class="heading-section">What Our Client Say's</h2>
                <div class="gaps size-sm"></div>
                <div class="testimonials">
                    <div id="testimonial" class="quotes-slider quotes-boxed col-md-8 col-md-offset-2">
                        <div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-a.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-b.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                        </div>
                        <!-- End LoopSlide -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Client logo -->
    <div class="section section-logos section-pad-sm bdr-top">
        <div class="container">
            <div class="content row">

                <div class="owl-carousel loop logo-carousel">
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo1.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo2.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo3.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo4.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo5.png') }}"></div>
                    <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cl-logo6.png') }}"></div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Call Action -->
    <div class="call-action bg-primary">
        <div class="cta-block">
            <div class="container">
                <div class="content row">

                    <div class="cta-sameline">
                        <h3>Looking for a greats consultantcy for your new business?</h3>
                        <p>Contact us today by submit a business inquiry form online.</p>
                        <a class="btn btn-outline" href="get-a-quote.html">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@stop