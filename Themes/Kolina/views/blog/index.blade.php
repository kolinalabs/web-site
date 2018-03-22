@extends('layouts.master')

@section('title')
    Blog posts | @parent
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
                </div>
            </div>
        </div>
        <div class="banner-bg imagebg">
            <img src="{{ Theme::url('image/banner-inner.jpg') }}" alt="" />
        </div>
    </div>

    div class="section section-blog section-pad">
    <div class="container">
        <div class="content row">

            <div class="row">
                <div class="col-md-8">
                    <!-- Blog Post Loop -->
                    <div class="row">
                        <ul class="blog-posts post-col2">

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-a.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 22 Sep, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">How Leaders Best Seed and Nourish Innovation</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-b.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 12 Sep, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Your Survival Depends on Great Strategic Execution!</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-c.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 29 Aug, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Unlock Your Business Potential with a Custom Simulation</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-d.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 17 Jul, 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">Revitalize Your Approach with Business Simulations</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-b.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 15, May 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">3 Essential Components of Business for Managers</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                            <li class="post post-loop col-md-6">
                                <div class="post-thumbs">
                                    <a href="news-details.html"><img alt="" src="image/news-a.jpg"></a>
                                </div>
                                <div class="post-entry">
                                    <div class="post-meta">
                                        <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 26, Apr 2017 </span>
                                    </div>
                                    <h2><a href="news-details.html">How to Have More Meaningful and Profitable Conversations</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor. Dolore magna aliqua enim ad minim veniam nostrud exercitation...</p>
                                    <a class="btn btn-alt" href="news-details.html">Read More</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="clear"></div>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a></li>
                    </ul>
                    <!-- End Blog Post -->
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
                            <h3 class="wgs-heading">Recent Posts</h3>
                            <div class="wgs-content">
                                <ul class="blog-recent">
                                    <li>
                                        <a href="#">
                                            <img alt="" src="image/news-thumb-d.jpg">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="" src="image/news-thumb-c.jpg">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="" src="image/news-thumb-b.jpg">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="" src="image/news-thumb-a.jpg">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit volup accus antium doloremque laudantiu...</p>
                                        </a>
                                    </li>
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

                        <div class="wgs-box wgs-contact-info">
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
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
            <?php if (isset($posts)): ?>
            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                        <h3><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h3>
                    </li>
                    <div class="clearfix"></div>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
@stop
