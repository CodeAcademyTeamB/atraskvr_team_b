<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
       @include('meta')
    </head>
    <body>
    @include('users.usersBase')


            <div class="content">
                <div class="title m-b-md">
                   Atrask VR
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    @include('footer')
    </body>
</html>
