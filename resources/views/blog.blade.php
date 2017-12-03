<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div id="main">
            @include('header')

            @if ($fullContent->isEmpty())

                Oops! We couldn't find the content you requested.

            @else
                @foreach ($fullContent as $singleFullContent)
    
                    @include('content', ['singleFullContent' => $singleFullContent])

                @endforeach
            @endif

            @include('footer')
        </div>
    </body>
</html>
