<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')@setting('core::site-name')@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.png') }}">

    {!! Theme::style('css/vendor.bundle.css') !!}
    {!! Theme::style('css/style.css') !!}
    @stack('css-stack')
</head>
<body class="site-body style-v1">

@include('partials.navigation')

@yield('content')
@include('partials.footer')

{!! Theme::script('js/gmaps.js') !!}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYoHWIujTe-tHh7lPbpHoeCU5F9iOjD_8"></script>
{!! Theme::script('js/jquery.bundle.js') !!}
{!! Theme::script('js/script.js') !!}
@yield('scripts')

<?php if (Setting::has('core::analytics-script')): ?>
    {!! Setting::get('core::analytics-script') !!}
<?php endif; ?>
@stack('js-stack')
</body>
</html>
