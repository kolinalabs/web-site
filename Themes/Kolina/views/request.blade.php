@extends('layouts.master')

@section('title')
    Solicitar | @parent
@stop

@section('content')
    <!-- Banner -->
    <div class="banner banner-static has-bg bg-primary">
        <div class="banner-cpn">
            <div class="container">
                <div class="content row">

                    <div class="banner-text">
                        <h1 class="page-title">Request For Free Conslutation</h1>
                        <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae incididunt ut labore et dolor dicta.</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active"><span>Solicitar</span></li>
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

    @include('partials.loading-modal')

    <div class="section section-contents section-freequote section-pad">
        <div class="container">
            <div class="row">
                @include('partials.request-form')
            </div>
        </div>
    </div>
    <!-- End Content -->
@stop