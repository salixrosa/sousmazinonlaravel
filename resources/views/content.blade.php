<article>
    <header class="postmeta">

        <h2>
            <a href='{{url("/$singleFullContent->slug")}}'>
                {{$singleFullContent->title}}
            </a>
        </h2>

        @if (!$singleFullContent->page_only)
            <time datetime="{{$singleFullContent->created_at}}">
                {{date('Y–m–d', strtotime($singleFullContent->created_at))}}
            </time>
        @endif

    </header>

    <div class="postcontent">
        {!!$singleFullContent->content!!}
    </div>
</article>