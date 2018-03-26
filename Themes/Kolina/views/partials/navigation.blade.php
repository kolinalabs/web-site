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
            <a class="navbar-brand" href="{{ route('homepage') }}">
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
                    <li><a href="{{ route('homepage') }}"  target="_self"> Home</a></li>
                    <li><a href="/en/sobre"  target="_self"> Sobre</a></li>
                    <li><a href="/en/servicos"  target="_self"> Serviços</a></li>
                    <li><a href="{{ route('en.blog') }}"  target="_self"> Blog</a></li>
                    <li><a href="/en/contato"  target="_self"> Contato</a></li>
                    <li class="quote-btn"><a class="btn" href="/solicitar"  target="_self" class="quote-btn"> Solicitar</a></li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- #end Navbar -->
</header>
<!-- End Header -->
