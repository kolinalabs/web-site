<!-- Header -->
<header class="site-header header-s1 is-sticky">
    <!-- Topbar -->
    <div class="topbar bg-light">
        <div class="container">
            <div class="row">
                <div class="top-aside top-left clearfix">
                    <ul class="top-contact clearfix">
                        <li class="t-email t-email1">
                            <em class="fa fa-envelope-o" aria-hidden="true"></em>
                            <span><a href="#">{!! Block::get('email') !!}</a></span>
                        </li>
                        <li class="t-phone t-phone1">
                            <em class="fa fa-phone" aria-hidden="true"></em>
                            <span>{!! Block::get('telefone') !!}</span>
                        </li>
                    </ul>
                </div>
                <div class="top-aside top-right clearfix">
                    <ul class="social clearfix">
                        <li><a href="https://www.facebook.com/kolinalabs" class="fa fa-facebook" target="_blank"></a></li>
                        <li><a href="https://twitter.com/kolinalabs" class="fa fa-twitter" target="_blank"></a></li>
                        <li><a href="https://plus.google.com/u/0/105096881221342531036" class="fa fa-google-plus" target="_blank"></a></li>
                        <li><a href="https://www.linkedin.com/company/kolinalabs/" class="fa fa-linkedin" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- #end Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="../../partials">
                <img class="logo logo-dark" alt="" src="{{ Theme::url('img/logo/logo3.png') }}">
            </a>
            <!-- #end Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Q-Button for Mobile -->
                <div class="quote-btn"><a class="btn" href="../../partials/get-a-quote.html">Free Consultant</a></div>
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li class="dropdown active"><a href="index.html" class="dropdown-toggle">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Home - Default</a></li>
                            <li><a href="index-v2.html">Home - V2</a></li>
                            <li><a href="index-v3.html">Home - V3</a></li>
                            <li><a href="index-v4.html">Home - V4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="teams.html">Teams / Experts</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="shortcode.html">Shortcode</a></li>
                            <li><a href="typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="services.html" class="dropdown-toggle">Consulting Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html">Services List</a></li>
                            <li><a href="services-alter.html">Services List - Alter</a></li>
                            <li><a href="service-single.html">Service Single</a></li>
                            <li><a href="service-single-alter.html">Service Single - Alter</a></li>
                        </ul>
                    </li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="quote-btn"><a class="btn" href="get-a-quote.html">Free Consultant</a></li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- #end Navbar -->
</header>
<!-- End Header -->
