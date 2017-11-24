<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div class="center">
            @include('header')

            @if (empty($fullContent))
                Oops! We have no content for you right now. 
            @else
                @foreach ($fullContent as $post)
                    <article>
                        <header class="postmeta">

                            <h2>
                                <a href="{{$post->slug}}" class="tosingle">
                                    {{$post->title}}
                                </a>
                            </h2>

                            <time datetime="{{$post->created_at}}">
                                {{$post->created_at}}
                            </time>

                        </header>

                        <div class="postcontent">
                            {!!$post->content!!}
                        </div>
                    </article>
                @endforeach
            @endif

            @include('footer')
        </div>
    </body>
</html>
