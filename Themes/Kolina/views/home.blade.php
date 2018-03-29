@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <!-- Banner/Slider -->
    <div id="slider" class="banner banner-slider carousel slide carousel-fade">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <!-- // -->
            <div class="item active">
                <div class="fill" style="background-image:url('{{ Theme::url('img/slider-a.jpg') }}');">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="banner-text al-left pos-left dark">
                                    <div class="animated fadeInUp">
                                        <h2>Consultoria e planejamento</h2>
                                        <p class="lead">Conte com uma equipe experiente para o entendimento das complexidades de negócio de sua empresa.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="/sobre">Sobre</a>
                                            <a class="btn btn-alt btn-outline" href="/sices-solar">Sices Solar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // -->
            <div class="item">
                <div class="fill" style="background-image:url('{{ Theme::url('img/slider-b.jpg') }}');">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="banner-text al-left pos-left dark">
                                    <div class="animated fadeInUp">
                                        <h2>Obtenção de resultados</h2>
                                        <p class="lead">Invista no caminho certo para obtenção de resultados sustentáveis. Somo especialistas em conduzir soluções.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="/sobre">Sobre</a>
                                            <a class="btn btn-alt" href="/solicitar">Orçamento Gratuito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // -->
            <div class="item">
                <div class="fill" style="background-image:url('{{ Theme::url('img/slider-c.jpg') }}');">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="banner-text al-left pos-left dark">
                                    <div class="animated fadeInUp">
                                        <h2>Tecnologia inteligente</h2>
                                        <p class="lead">Soluções estratégicas para fornecer produtos que auxiliem sua empresa na percepção do negócio.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="/sobre">Sobre</a>
                                            <a class="btn btn-light btn-outline" href="/contato">Contato</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // -->
        </div>
        <!-- Arrow Controls -->
        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Proximo</span>
        </a>
    </div>
    <!-- #end Banner/Slider -->

    <!-- Service Section -->
    <div class="section section-services section-pad bg-light">
        <div class="container">
            <div class="content row">
                <!-- Feature Row  -->
                <div class="feature-row feature-service-row row">
                    <div class="col-sm-4">
                        <!-- feature box -->
                        <div class="feature feature-s6 boxed">
                            <div class="fbox-photo">
                                <img src="{{ Theme::url('img/home-service-a.jpg') }}" alt="">
                            </div>
                            <div class="fbox-content">
                                <h3>Objetividade</h3>
                                <p>Entendendo as reais necessidades de sua empresa, auxiliamos na obtenção de resultados relevantes.</p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-sm-4">
                        <!-- feature box -->
                        <div class="feature feature-s6 boxed">
                            <div class="fbox-photo">
                                <img src="{{ Theme::url('img/home-service-b.jpg') }}" alt="">
                            </div>
                            <div class="fbox-content">
                                <h3>Qualidade</h3>
                                <p>Atuação integrada entre equipe e cliente nos processos de validação, verificação e testes.</p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-sm-4">
                        <!-- feature box -->
                        <div class="feature feature-s6 boxed">
                            <div class="fbox-photo">
                                <img src="{{ Theme::url('img/home-service-c.jpg') }}" alt="">
                            </div>
                            <div class="fbox-content">
                                <h3>Visão</h3>
                                <p>Soluções escaláveis, que permitem a expansão de resultados e adaptação às mudanças.</p>
                            </div>
                        </div>
                        <!-- End Featur box -->
                    </div>
                </div>
                <!-- Feture Row  #end -->
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Content  -->
    <div class="section-pad">
        <div class="container">
            <div class="content row row-vm">
                <div class="col-md-6 npl res-m-bttm">
                    <div class="text-left comm-heading">
                        <h3 class="heading-section">Inovando soluções</h3>
                        <p>A visão das necessidades como algo único, nos possibilita flexibilizar as soluções de forma que atendam exatamente a demanda exigida.</p>
                        <p>Nós da KolinaLabs, compreendemos os problemas como algo que pode ser similar mas nunca idêntico. Isto permite inovar constantemente as soluções desenvolvidas, aplicando o talento e a experiência de nossa equipe na simplificação das complexidades, avaliando possibilidades, riscos e principalmente resultados.</p>
                        <p>A essência da inovação é a criatividade.</p>
                        <a href="/sobre" class="btn">Sobre nós</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-offset-1 npr">
                    <img src="{{ Theme::url('img/home-about.jpg') }}" alt="Consulting Template">
                </div>
            </div>
        </div>
    </div>
    <!-- End Conetnt -->
    <!-- Content -->
    <div class="section section-pad bg-secondary light">
        <div class="container">
            <div class="content row">
                <div class="col-lg-12">
                    <div class="wide-sm center">
                        <h2>Consultorias</h2>
                        <div class="gaps size-xs"></div>
                        <p class="lead">As necessidades de sua empresa entendidas por uma equipe de alto nível. Nossa atuação visa compreender e propor soluções com base na sua realidade.</p>
                        <div class="gaps"></div>
                        <a href="/solicitar" class="btn btn-light">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content -->
    <!-- Testimonials -->
    {{--<div class="section section-quotes section-pad bg-light testimonials">--}}
        {{--<div class="container">--}}
            {{--<div class="content row">--}}


                {{--<h3 class="heading-section">What Our Client Say's</h3>--}}
                {{--<div class="gaps"></div>--}}
                {{--<div class="testimonials">--}}
                    {{--<div id="testimonial" class="quotes-slider quotes-slider-v2 quotes-boxed">--}}
                        {{--<div class="owl-carousel loop has-carousel" data-items="3" data-loop="true" data-dots="true" data-auto="true">--}}
                            {{--<div class="item">--}}
                                {{--<!-- Each Quotes -->--}}
                                {{--<div class="quotes quotes-v2">--}}
                                    {{--<div class="quotes-text">--}}
                                        {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>--}}
                                        {{--<div class="star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-thumb">--}}
                                        {{--<img src="{{ Theme::url('img/client-a.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="profile">--}}
                                        {{--<h5>John Doe</h5>--}}
                                        {{--<h6>CEO, Company Name</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Quotes -->--}}
                            {{--</div>--}}
                            {{--<!-- // -->--}}
                            {{--<div class="item">--}}
                                {{--<!-- Each Quotes -->--}}
                                {{--<div class="quotes quotes-v2">--}}
                                    {{--<div class="quotes-text">--}}
                                        {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>--}}
                                        {{--<div class="star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-thumb">--}}
                                        {{--<img src="{{ Theme::url('img/client-b.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="profile">--}}
                                        {{--<h5>John Doe</h5>--}}
                                        {{--<h6>CEO, Company Name</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Quotes -->--}}
                            {{--</div>--}}
                            {{--<!-- // -->--}}
                            {{--<div class="item">--}}
                                {{--<!-- Each Quotes -->--}}
                                {{--<div class="quotes quotes-v2">--}}
                                    {{--<div class="quotes-text">--}}
                                        {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>--}}
                                        {{--<div class="star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-thumb">--}}
                                        {{--<img src="{{ Theme::url('img/client-c.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="profile">--}}
                                        {{--<h5>John Doe</h5>--}}
                                        {{--<h6>CEO, Company Name</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Quotes -->--}}
                            {{--</div>--}}
                            {{--<!-- // -->--}}
                            {{--<div class="item">--}}
                                {{--<!-- Each Quotes -->--}}
                                {{--<div class="quotes quotes-v2">--}}
                                    {{--<div class="quotes-text">--}}
                                        {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>--}}
                                        {{--<div class="star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-thumb">--}}
                                        {{--<img src="{{ Theme::url('img/client-a.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="profile">--}}
                                        {{--<h5>John Doe</h5>--}}
                                        {{--<h6>CEO, Company Name</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Quotes -->--}}
                            {{--</div>--}}
                            {{--<!-- // -->--}}
                            {{--<div class="item">--}}
                                {{--<!-- Each Quotes -->--}}
                                {{--<div class="quotes quotes-v2">--}}
                                    {{--<div class="quotes-text">--}}
                                        {{--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>--}}
                                        {{--<div class="star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="profile-thumb">--}}
                                        {{--<img src="{{ Theme::url('img/client-b.jpg') }}" alt="">--}}
                                    {{--</div>--}}
                                    {{--<div class="profile">--}}
                                        {{--<h5>John Doe</h5>--}}
                                        {{--<h6>CEO, Company Name</h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Quotes -->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- End LoopSlide -->--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- End Section -->

    <!-- Latest News -->
    <div class="section section-news section-pad">
        <div class="container">
            <div class="content row">

                <h3 class="heading-section">Postagens recentes</h3>
                <div class="gaps"></div>
                <div class="blog-posts">

                    <?php $posts = \Modules\Page\Http\Controllers\Api\BlogPostsController::getLatestBlogPosts() ?>

                    <div class="row">
                        <?php for ($i = 0; $i < count($posts); $i++): ?>
                            <?php
                                $post_array = $posts[$i]->files()->first();

                                if (is_null($post_array)) {
                                    $postThumbnail = Theme::url('img/news-a.jpg');
                                } else {
                                    $postThumbnail = $post_array;
                                }
                            ?>

                            <?php if ($i < 2): ?>
                                <div class="post post-boxed col-md-4 col-sm-6 res-s-bttm-lg">
                                    <div class="post-thumbs">
                                        <a href="#"><img alt="" src="{{ $postThumbnail }}"></a>
                                        <div class="post-meta"><span class="pub-date"><strong>{{ $posts[$i]->created_at->format('d') }}</strong> {{ $posts[$i]->created_at->format('m') }}</span></div>
                                    </div>
                                    <div class="post-entry">
                                        <h3><a href="{{ URL::route($currentLocale . '.blog.slug', [$posts[$i]->slug]) }}">{{ $posts[$i]->title }}</a></h3>
                                        <?php echo str_limit($posts[$i]->content, 130) ?>
                                        <br>
                                        <br>
                                        <a class="btn btn-alt" href="{{ URL::route($currentLocale . '.blog.slug', [$posts[$i]->slug]) }}">Leia Mais</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <div class="gaps size-2x hidden-lg hidden-md"></div>
                        <div class="col-md-4 col-sm-12">
                            <?php if (count($posts) >= 2): ?>
                            <ul class="news-recent">
                                <?php for ($i = 2; $i < count($posts); $i++): ?>
                                <?php $post_array = $posts[$i]->files()->first(); ?>
                                <li>
                                    <img alt="" src="{{ Theme::url('img/news-thumb-d.jpg') }}">
                                    <a href="#">
                                        <?php echo str_limit($posts[$i]->content, 100) ?>
                                    </a>
                                </li>
                                <?php endfor; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
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
                        <h3>Procurando uma solução tecnológica para seu novo negócio?</h3>
                        <p>Entre em contato e obtenha a orientação de nossa equipe.</p>
                        <a class="btn btn-outline" href="/contato">Contato</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@stop
