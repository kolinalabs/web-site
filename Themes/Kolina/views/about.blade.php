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
                        <h1 class="page-title">Quem somos?</h1>
                        <p>Um time de especialistas com a expertise necessária para elevar os potenciais de seu negócio.</p>
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
                    <h2>Temos experiência para oferecer os serviços que você precisa para seguir em frente</h2>
                    <p style="text-align: justify">
                        Desde a concepção do projeto, atuamos de forma a garantir a obtenção dos melhores resultados de produto. Estes resultados são compostos por uma gama de necessidades de negócio cuja relevância está diretamente associada aos processos utilizados por quem atua no setor.
                    </p>
                    <p style="text-align: justify">
                        Nossa experiência em projetos de portes distintos nos permite avaliar com eficácia a aplicabilidade de recursos e tecnologias que se encaixam às necessidades expostas.
                        Por isso, não aplicamos a mesma visão sobre diferentes contextos de projeto, embora muitos possam compartilhar de técnicas e ferramentas similares. Para nós, seu projeto é único!
                    </p>
                </div>
                <div class="col-sm-5 npr">
                    <img alt="" src="{{ Theme::url('img/service-f.png') }}" style="padding-top: 30px">
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->
    <!-- Content -->
    <div class="section section-contents section-pad bg-light">
        <div class="container">
            <div class="content row center">
                <h2 class="heading-section">ABORDAGEM INTELIGENTE</h2>
                <div class="gaps size-sm"></div>
                <div class="row">
                    <div class="col-sm-4 res-s-bttm">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-diamond" aria-hidden="true"></em>
                            </div>
                            <h4>Profissionais experientes</h4>
                            <p>Equipe de profissionais capacidades distintas, permitindo uma ampla visão analítica sobre cada aspecto do projeto.</p>
                        </div>

                    </div>
                    <div class="col-sm-4 res-s-bttm">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-check-square" aria-hidden="true"></em>
                            </div>
                            <h4>Confiabilidade</h4>
                            <p>Aplicamos metodologias e técnicas que garantem um produto de qualidade, focado objetividade e no resultado necessário.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box bg-white pd-x3 round">
                            <div class="icon-box style-s1">
                                <em class="fa fa-bolt" aria-hidden="true"></em>
                            </div>
                            <h4>Experiência</h4>
                            <p>Estamos sempre ligados ao que é novo, porém sem deixar de lado nossos cases de sucesso.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->
    <!-- Why Choose -->
    <div class="section section-contents section-pad light has-bg fixed-bg" style="background-image: url('{{  Theme::url('img/plx-dark_1024.jpg') }}')">
        <div class="container">
            <div class="content row center">

                <h2 class="heading-section">PORQUE NOS ESCOLHER?</h2>
                <div class="gaps size-sm"></div>
                <div class="feature-intro">

                    <div class="row">
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-briefcase" aria-hidden="true"></em>
                            </div>
                            <h4>Eficiência & Eficácia</h4>
                            <p>
                                Processo de desenvolvimento focado em performance e assertividade.
                                O certo da forma certa.
                            </p>
                        </div>
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-black-tie" aria-hidden="true"></em>
                            </div>
                            <h4>Compromisso & Confiança</h4>
                            <p>
                                Garantia de acompanhamento após implantação.
                                Avaliar, manter, corrigir.
                            </p>
                        </div>
                        <div class="col-sm-3 res-s-bttm">
                            <div class="icon-box style-s2">
                                <em class="fa fa-cogs" aria-hidden="true"></em>
                            </div>
                            <h4>Feedbacks & Revisões</h4>
                            <p>
                                Acompanhamento de processos com informações atualizadas.
                                O que e como está sendo feito.
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <div class="icon-box style-s2">
                                <em class="fa fa-building" aria-hidden="true"></em>
                            </div>
                            <h4>Qualidade & Inovação</h4>
                            <p>Recursos avançados aplicados ao cenário proposto, garantindo o melhor resultado.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose -->

    <!-- Client logo -->
    <div class="owl-carousel loop logo-carousel">
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr1.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr2.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr3.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr4.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr5.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr6.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr7.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr8.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr9.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr10.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr11.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr12.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr13.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr14.png') }}"></div>
        <div class="logo-item"><img alt="" width="190" height="82" src="{{ Theme::url('img/cr15.png') }}"></div>
    </div>
    <!-- End Section -->

    <!-- Call Action -->
    @include('partials.contact-bar')
    <!-- End Section -->
@stop