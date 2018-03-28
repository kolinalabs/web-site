@extends('layouts.master')

@section('title')
    Sices Solar | @parent
@stop

@section('content')

    @include('partials.loading-modal')

    <!-- Banner -->
    <div class="banner" align="center">
        <img src="{{ Theme::url('img/sices_header.png') }}" class="responsive-image" />
    </div>
    <!-- End Banner -->

    <div class="container" style="padding-bottom: 20px">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-custom-sices">
                            <div class="panel-heading">Equipe</div>
                            <div class="panel-body">
                                <p>Backend</p>
                                <p>Frontend</p>
                                <p>Produto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-custom-sices">
                            <div class="panel-heading">Gestão</div>
                            <div class="panel-body">
                                <p>Distribuição de tarefas</p>
                                <p>Coleta de requisitos</p>
                                <p>Reuniões diárias</p>
                                <p>Documentações</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-custom-sices">
                            <div class="panel-heading">Tecnologias</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-1">
                                        <img src="{{ Theme::url('img/tech_sf.png') }}" class="responsive-image" />
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ Theme::url('img/tech_vue.png') }}" class="responsive-image" />
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ Theme::url('img/tech_aws.png') }}" class="responsive-image" />
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ Theme::url('img/tech_git.png') }}" class="responsive-image" />
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ Theme::url('img/tech_mysql.png') }}" class="responsive-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 quotes" style="padding-top: 60px">
                <div>
                    <h5>“They are really capabilities and experience to deliver the answers you need to move forward.”</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam.</p>
                </div>
                <div align="center">
                    <div class="profile-thumb">
                        <img src="{{ Theme::url('img/client-a.jpg') }}" alt="">
                    </div>
                    <div class="profile">
                        <h5>John Doe</h5>
                        <h6>CEO, Company Name</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-action cta-small bg-secondary">
        <div class="cta-block">
            <div class="container">
                <div class="content row">
                    <div class="cta-sameline">
                        <h3>SOLICITAR</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="padding-top: 20px; padding-bottom: 80px">
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
    <!-- End Content -->
@stop