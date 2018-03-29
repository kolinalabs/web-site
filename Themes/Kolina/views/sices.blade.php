@extends('layouts.master')

@section('title')
    Sices Solar | @parent
@stop

@section('content')

    @include('partials.loading-modal')

    <div class="container" style="padding-bottom: 20px">

        <!-- Banner -->
        <div class="banner" align="center">
            <img src="{{ Theme::url('img/sices_header.png') }}" class="responsive-image" />
        </div>
        <!-- End Banner -->

        <div class="row" style="padding-top: 10px">
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
            @include('partials.request-form')
        </div>
    </div>
    <!-- End Content -->
@stop