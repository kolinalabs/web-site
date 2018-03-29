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
                                        <h2>Consulting + Planning</h2>
                                        <p class="lead">No matter how complex your business questions, we have the capabilities and experience to deliver the answers you need to move forward.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="#">Learn More</a>
                                            <a class="btn btn-alt btn-outline" href="#">Our Services</a>
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
                                        <h2>Getting business results!</h2>
                                        <p class="lead">As the world’s largest consulting firm, we can help you take decisive action and achieve sustainable results.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="#">Learn More</a>
                                            <a class="btn btn-alt" href="#">Free Consultation</a>
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
                                <div class="banner-text al-left pos-left light">
                                    <div class="animated fadeInUp">
                                        <h2>Advanced Analytics</h2>
                                        <p class="lead">To realize the value of big data, organizations need strategic—and not merely technological—solutions.</p>
                                        <div class="banner-cta">
                                            <a class="btn" href="#">Learn More</a>
                                            <a class="btn btn-light btn-outline" href="#">Contact Us</a>
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
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
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
                            <a href="#">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/home-service-a.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="#">Business Planning</a></h3>
                                <p>Planning is the single most important part of success, poor planning can result in a lot of lost time...</p>
                                <p><a href="#" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-sm-4">
                        <!-- feature box -->
                        <div class="feature feature-s6 boxed">
                            <a href="#">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/home-service-b.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="#">Investment Planning</a></h3>
                                <p>We work with our clients and do a deep research of their business. We help prepare possible outcomes...</p>
                                <p><a href="#" class="btn-link">Read More</a></p>
                            </div>
                        </div>
                        <!-- End Feature box -->
                    </div>
                    <div class="col-sm-4">
                        <!-- feature box -->
                        <div class="feature feature-s6 boxed">
                            <a href="#">
                                <div class="fbox-photo">
                                    <img src="{{ Theme::url('img/home-service-c.jpg') }}" alt="">
                                </div>
                            </a>
                            <div class="fbox-content">
                                <h3><a href="#">Audit &amp; Assurance</a></h3>
                                <p>Audit and assurance is all about data analysis. Everything needs to be checked, double checked and triple...</p>
                                <p><a href="#" class="btn-link">Read More</a></p>
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
                        <h3 class="heading-section">Company At A Glance</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a enim aliquam, condimentum nisl a, laoreet lectus. Aliquam convallis sed elit nec vehicula. Praesent gravida, massa sit amet ullamcorper fringilla, tortor nunc ultrices dui porttitor mi non, elementum dui.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a enim aliquam, condimentum nisl a, laoreet lectus.</p>
                        <a href="about.html" class="btn">About us</a>
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
                        <h2>Consulting services for industries</h2>
                        <div class="gaps size-xs"></div>
                        <p class="lead">Our industry consultants help address your most challenging issues by providing strategic, financial, operational, human capital, and IT services.</p>
                        <div class="gaps"></div>
                        <a href="#" class="btn btn-light">Free Cosultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Content -->
    <!-- Team -->
    <div class="section section-pad">
        <div class="container">
            <div class="content row">

                <h3 class="heading-section">Our Experts</h3>
                <div class="gaps"></div>
                <div class="team-member-row row mgtop">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Profile -->
                        <div class="team-member team-s2">
                            <div class="team-photo">
                                <img alt="" src="{{ Theme::url('img/team-a.jpg') }}">
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="name">Brandon Auger</h4>
                                <p class="sub-title">Corporate Consultant</p>
                            </div>
                        </div>
                        <!-- Team #end -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Profile -->
                        <div class="team-member team-s2">
                            <div class="team-photo">
                                <img alt="" src="{{ Theme::url('img/team-b.jpg') }}">
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="name">Domenick Bertelli</h4>
                                <p class="sub-title">Business Consultant</p>
                            </div>
                        </div>
                        <!-- Team #end -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Profile -->
                        <div class="team-member team-s2">
                            <div class="team-photo">
                                <img alt="" src="{{ Theme::url('img/team-c.jpg') }}">
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="name">Joseph Feingold</h4>
                                <p class="sub-title">Retirement Consultant</p>
                            </div>
                        </div>
                        <!-- Team #end -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <!-- Team Profile -->
                        <div class="team-member team-s2">
                            <div class="team-photo">
                                <img alt="" src="{{ Theme::url('img/team-d.jpg') }}">
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4 class="name">Scott Briggs</h4>
                                <p class="sub-title">Business Consultant</p>
                            </div>
                        </div>
                        <!-- Team #end -->
                    </div>
                </div><!-- TeamRow #end -->

            </div>
        </div>
    </div>
    <!-- End Section -->
    <!-- Testimonials -->
    <div class="section section-quotes section-pad bg-light testimonials">
        <div class="container">
            <div class="content row">


                <h3 class="heading-section">What Our Client Say's</h3>
                <div class="gaps"></div>
                <div class="testimonials">
                    <div id="testimonial" class="quotes-slider quotes-slider-v2 quotes-boxed">
                        <div class="owl-carousel loop has-carousel" data-items="3" data-loop="true" data-dots="true" data-auto="true">
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes quotes-v2">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-a.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes quotes-v2">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-b.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes quotes-v2">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-c.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes quotes-v2">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-a.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes quotes-v2">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="{{ Theme::url('img/client-b.jpg') }}" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                        </div>
                        <!-- End LoopSlide -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Latest News -->
    <div class="section section-news section-pad">
        <div class="container">
            <div class="content row">

                <h3 class="heading-section">Consulting Experts News</h3>
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
                                        <?php echo str_limit($posts[$i]->content, 150) ?>
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
                        <h3>Looking for a greats consultantcy for your new business?</h3>
                        <p>Contact us today by submit a business inquiry form online.</p>
                        <a class="btn btn-outline" href="get-a-quote.html">Contact Us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->
@stop
