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
    <div class="section section-contents section-contact section-pad">
        <div class="container">
            <div class="content row">

                <div class="contact-content row">
                    <div class="drop-message col-md-7 res-m-bttm">
                        <h2 class="heading-section">Enviar Mensagem</h2>
                        <form id="quote-contact-request" class="form-message" action="/api/contact" method="post">
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-name" type="text" placeholder="Nome *" class="form-control required">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-6 form-m-bttm">
                                    <input name="contact-phone" type="text" placeholder="Telefone" class="form-control phone">
                                </div>
                                <div class="form-field col-md-6">
                                    <input name="contact-subject" type="text" placeholder="Assunto" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-md-12">
                                    <textarea name="contact-message" placeholder="Mensagem *" class="txtarea form-control required"></textarea>
                                </div>
                            </div>

                            <input type="text" class="hidden" name="form-anti-honeypot" value="">
                            <div class="form-results"></div>
                            <button type="submit" class="btn solid-btn sb-h">Enviar</button>
                        </form>
                    </div>

                    <div class="contact-details col-md-4 col-md-offset-1">
                        <h3 class="heading-section">Endereço de Contato</h3>
                        <ul class="contact-list">
                            <li><em class="fa fa-map" aria-hidden="true"></em>
                                <span>Rua Xavier da Silva, 1340, <br>Guarapuava, PR - 85010-220 - Brasil.</span>
                            </li>
                            <li><em class="fa fa-phone" aria-hidden="true"></em>
                                <span>Telefone : +55 42 99867-6638</span>
                            </li>
                            <li><em class="fa fa-envelope" aria-hidden="true"></em>
                                <span>Email : <a href="#">si@kolinalabs.com</a></span>
                            </li>
                            <li>
                                <em class="fa fa-clock-o" aria-hidden="true"></em><span>Seg - Sex: 08:00 - 18:30 </span>
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
    @include('partials.contact-bar')
    <!-- End Section -->
@stop