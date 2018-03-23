@extends('layouts.master')

@section('title')
    Contato | @parent
@stop

@section('content')
    <!-- Banner -->
    <div class="banner banner-static has-bg bg-primary">
        <div class="banner-cpn">
            <div class="container">
                <div class="content row">

                    <div class="banner-text">
                        <h1 class="page-title">Contact Consulting Expert</h1>
                        <p>Want to work with us or need more details about consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolor.</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active"><span>Contato</span></li>
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
    <div class="section section-contents section-contact section-pad">
        <div class="container">
            <div class="content row">

                <div class="contact-content row">
                    <div class="drop-message col-md-7 res-m-bttm">
                        <h2 class="heading-section">Drop a Message</h2>
                        <form id="quote-contact-request" class="form-message" action="" method="post">
                            <div class="form-results"></div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-name" type="text" placeholder="Name *" class="form-control required">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-phone" type="text" placeholder="Phone" class="form-control">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-service" type="text" placeholder="Interest of Service" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="contact-message" placeholder="Messages *" class="txtarea form-control required"></textarea>
                                </div>
                            </div>
                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn solid-btn sb-h">Submit</button>
                        </form>
                    </div>
                    <div class="contact-details col-md-4 col-md-offset-1">
                        <h3 class="heading-section">Contact Address</h3>
                        <ul class="contact-list">
                            <li><em class="fa fa-map" aria-hidden="true"></em>
                                <span>1234 Sed ut perspiciatis Road, <br>At vero eos, D58 8975, London.</span>
                            </li>
                            <li><em class="fa fa-phone" aria-hidden="true"></em>
                                <span>Toll Free : (123) 4567 8910<br>
								Telephone : (123) 1234 5678</span>
                            </li>
                            <li><em class="fa fa-envelope" aria-hidden="true"></em>
                                <span>Email : <a href="#">info@sitename.com</a></span>
                            </li>
                            <li>
                                <em class="fa fa-clock-o" aria-hidden="true"></em><span>Sat - Thu: 8AM - 7PM </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Map -->
    <div class="map-holder map-contact">
        <div id="gmap"></div>
    </div>
    <!-- End map -->
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