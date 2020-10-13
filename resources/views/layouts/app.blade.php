<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('titolo')</title>
    </head>
    <body>
        <header>
            @include('partials/header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials/footer')
        </footer>

    </body>
</html>
