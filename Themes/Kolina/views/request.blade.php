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

                <div class="freequote-content row">

                    <div class="quote-list col-md-7 res-m-bttm-lg">
                        <div class="quote-group">
                            <form id="quote-contact-request" class="form-quote" action="/api/request" method="post">
                                <div class="form-group row">
                                    <div class="form-field col-md-6 form-m-bttm">
                                        <input name="quote-request-name" type="text" placeholder="Nome *" class="form-control required">
                                    </div>
                                    <div class="form-field col-md-6">
                                        <input name="quote-request-company" type="text" placeholder="Empresa" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-field col-md-6 form-m-bttm">
                                        <input name="quote-request-email" type="email" placeholder="Email *" class="form-control required email">
                                    </div>
                                    <div class="form-field col-md-6">
                                        <input name="quote-request-phone" type="text" placeholder="Telefone *" class="form-control required phone">
                                    </div>
                                </div>
                                <h4>Serviços Solicitados</h4>
                                <div class="form-group row">
                                    <ul class="form-field clearfix">
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Business Consulting"> <span>Business Consulting</span></li>
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Audit & Assurance"> <span>Audit &amp; Assurance</span></li>
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Financial Projections"> <span>Financial Projections</span></li>
                                    </ul>
                                    <ul class="form-field clearfix">
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Investment Planning"> <span>Investment Planning</span></li>
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Retirement Planning"> <span>Retirement Planning</span></li>
                                        <li class="col-sm-4"><input type="checkbox" name="quote-request-interest[]" value="Strategic Planning"> <span>Strategic Planning</span></li>
                                    </ul>
                                </div>
                                <div class="form-group row">
                                    <div class="form-field col-md-6">
                                        <p>Melhor Horário para Contato</p>
                                        <select name="quote-request-reach">
                                            <option value="">Selecione uma opção</option>
                                            <option value="08:00 - 12:00">08:00 - 12:00</option>
                                            <option value="13:30 - 15:00">13:30 - 15:00</option>
                                            <option value="15:00 - 18:30">15:00 - 18:30</option>
                                        </select>
                                    </div>
                                    <div class="form-field col-md-6">
                                        <p>Como Nos Encontrou</p>
                                        <select name="quote-request-hear">
                                            <option value="">Selecione uma opção</option>
                                            <option value="Amigos">Amigos</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Google">Google</option>
                                            <option value="Colegas">Colegas</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="form-field col-md-12">
                                        <textarea name="quote-request-message" placeholder="Mensagem / Comentário *" class="txtarea form-control required"></textarea>
                                    </div>
                                </div>

                                <input type="text" class="hidden" name="form-anti-honeypot" value="">

                                <div class="form-results"></div>

                                <?php echo \Modules\Page\Http\Controllers\Api\FormController::getCaptcha() ?>

                                <div style="padding-top: 10px">
                                    <button type="submit" class="btn solid-btn sb-h">Enviar</button>
                                </div>
                            </form>
                        </div>
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
@stop