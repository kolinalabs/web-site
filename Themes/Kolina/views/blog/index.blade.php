@extends('layouts.master')

@section('title')
    Blog | @parent
@stop

@section('content')

    <div class="banner banner-static has-bg bg-primary">
        <div class="banner-cpn">
            <div class="container">
                <div class="content row">

                    <div class="banner-text">
                        <h2 class="page-title">Latest Consulting News</h2>
                        <p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae dict aad minim veniam nostrud.</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active"><span>Blog</span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="banner-bg imagebg">
            <img src="{{ Theme::url('img/banner-inner.jpg') }}" alt="" />
        </div>
    </div>

    <div class="section section-blog section-pad">
        <div class="container">
            <div class="content row">

                <div class="row">
                    <div class="col-md-8">
                        <!-- Blog Post Loop -->
                        <div class="row">
                            <?php if (isset($posts)): ?>
                            <ul class="blog-posts post-col2">
                                <?php foreach ($posts as $post): ?>
                                <?php $post_array = $post->files()->first(); ?>
                                <li class="post post-loop col-md-6">
                                    <div class="post-thumbs">
                                        <img src="{{ $post_array['path'] }}" alt="{{ $post_array['filename'] }}">
                                    </div>
                                    <div class="post-entry">
                                        <div class="post-meta">
                                            <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{ $post->created_at->format('d-m-Y') }} </span>
                                        </div>
                                        <h3>{{ $post->title }}</h3>
                                        <a class="btn btn-alt" href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">Leia Mais</a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        {!! $posts->render() !!}
                        <div class="clear"></div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">
                        <div class="sidebar-right">
                            <div class="wgs-box wgs-search">
                                <div class="wgs-content">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="wgs-box wgs-recents">
                                <h3 class="wgs-heading">Posts Recentes</h3>
                                <div class="wgs-content">
                                    <ul class="blog-recent">
                                        <?php foreach ($latestPosts as $post): ?>
                                        <li>
                                            <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">
                                                <img alt="" src="{{ Theme::url('image/news-thumb-a.jpg') }}">
                                                <p>{{ $post->slug }}</p>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="wgs-box wgs-tags">
                                <h3 class="wgs-heading">Tags</h3>
                                <div class="wgs-content">
                                    <ul class="tag-list clearfix">
                                        <li><a href="">Business</a></li>
                                        <li><a href="">Consultant</a></li>
                                        <li><a href="">Delivery</a></li>
                                        <li><a href="">Safe</a></li>
                                        <li><a href="">Fast</a></li>
                                        <li><a href="">sea</a></li>
                                    </ul>
                                </div>
                            </div>

                           {{-- <div class="wgs-box wgs-contact-info">
                                <h3 class="wgs-heading">Contact Information</h3>
                                <div class="wgs-content boxed">
                                    <ul class="contact-list">
                                        <li>
                                            <i class="fa fa-map" aria-hidden="true"></i>
                                            <span>1234 Sed ut perspiciatis Road, <br>At vero eos, D58 8975, London.</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>(123) 4567 8910</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email : <a href="#">info@sitename.com</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>--}}

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
