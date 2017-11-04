<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body>
        <div class="center">
            @include('header')
            <article>
                <header class="postmeta">

                    <h2>
                        <a href="TODO the_permalink()" class="tosingle">
                            TODO the_title(); 
                        </a>
                    </h2>

                    <time datetime="TODO get_the_date('Y-m-d')">
                        TODO strtolower(get_the_date());
                    </time>

                </header>

                <div class="postcontent">
                    TODO the_content();
                </div>
            </article>

            @include('footer')
        </div>
    </body>
</html>
