@extends('layouts.master')

@section('title')
    {{ $post->title }} | @parent
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <span class="linkBack">
            <a href="{{ URL::route($currentLocale . '.blog') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back to post list</a>
        </span>
                <h1>{{ $post->title }}</h1>
                <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>

                {!! $post->content !!}

                <p>
                    <?php if ($previous = $post->present()->previous): ?>
                    <a href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}">Previous</a>
                    <?php endif; ?>
                    <?php if ($next = $post->present()->next): ?>
                    <a href="{{ route(locale() . '.blog.slug', [$next->slug]) }}">Next</a>
                    <?php endif; ?>
                </p>
            </div>
        </div>

        <div id="disqus_thread"></div>
    </div>

    <script>

        var paths = window.location.pathname.split('/');
        var pageIdentifier = paths[paths.length - 1];

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        var disqus_config = function () {
            this.page.url = window.location.href;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = pageIdentifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://gbine.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@stop
