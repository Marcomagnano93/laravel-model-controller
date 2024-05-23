<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <header>
            <div class="container-fluid text-center py-4 bg-warning">
                <h1 class="text-white">Movies</h1>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>