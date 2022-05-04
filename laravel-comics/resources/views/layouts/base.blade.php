<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC COMICS - @yield('title')</title>

    @yield('head-scripts')

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')

    @yield('footer-scripts')
</body>
</html>
