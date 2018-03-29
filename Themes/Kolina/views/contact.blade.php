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
                        <h1 class="page-title">Contate-nos para uma consultoria especializada</h1>
                        <p>Possui uma necessidade tecnológica para seu negócio?</p>
                        <p>Um de nossos especialistas orientará sobre o melhor caminho.</p>
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

    @include('partials.loading-modal')

    <div class="section section-contents section-contact section-pad">
        <div class="container">
            <div class="content row">
                @include('partials.contact-form')
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
    @include('partials.contact-bar')
    <!-- End Section -->
@stop