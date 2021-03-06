@extends('layouts.master')

@section('title')
    Serviços | @parent
@stop

@section('content')
    <!-- Banner -->
    <div class="banner banner-static has-bg bg-primary">
        <div class="banner-cpn">
            <div class="container">
                <div class="content row">

                    <div class="banner-text">
                        <h1 class="page-title">Planning + Strategy + Consulting</h1>
                        <p>To ventore veritatis et quasi architecto beatae vitae, dicta quasi architecto tortor mauris condimentum nibh massa justo sit amet risus.</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active"><span>Serviços</span></li>
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
    
    <!-- Service Section -->
    <div class="section section-services section-pad">
        <div class="container">
            <div class="content row">

                <!-- Feature Row  -->
                <div class="feature-row feature-service-row row">
                    <div class="col-md-4 col-sm-6 even first">
                        <!-- feature box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-a.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="service-single.html">Business Consulting</a></h3>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim.</p>
                                <p><a href="service-single.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-md-4 col-sm-6 odd">
                        <!-- feature box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single-alter.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-b.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="service-single-alter.html">Audit &amp; Assurance</a></h3>
                                <p>Duis autem vel eum iriure dolor in ostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex commodo consequat.</p>
                                <p><a href="service-single-alter.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-md-4 col-sm-6 even">
                        <!-- feature box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-c.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="service-single.html">Financial Projections</a></h3>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ea commodo consequat.</p>
                                <p><a href="service-single.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Featur box -->
                    </div>
                    <div class="col-md-4 col-sm-6 odd">
                        <!-- featured box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single-alter.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-d.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="service-single-alter.html">Investment Planning</a></h3>
                                <p>Lobortis nisl ut aliquip ut wisi enim ad minim veniam quis. Nostrud exerci tation ullamcorper suscipit exea commodo.</p>
                                <p><a href="service-single-alter.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-md-4 col-sm-6 odd">
                        <!-- featured box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-e.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="service-single.html">Retirement Planning</a></h3>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consuat.</p>
                                <p><a href="service-single.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-md-4 col-sm-6 odd">
                        <!-- featured box -->
                        <div class="feature boxed feature-s6">
                            <a href="service-single-alter.html">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/service-f.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="solution-singl-alter.html">Strategic Planning</a></h3>
                                <p>Quis nostrud exerci ut wisi enim ad minim veniam,  tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conseat.</p>
                                <p><a href="service-single-alter.html" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                </div>
                <!-- Feture Row  #end -->

            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Call Action -->
    @include('partials.contact-bar')
    <!-- End Section -->
@stop