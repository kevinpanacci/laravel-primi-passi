<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> {{-- questo è il 'linguaggio' di Blade --}}
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <title>@yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('mainContent')
        </main>
        @include('partials.footer')
        @yield('scripts')
    </body>
    {{-- Scripts --}}
</html>
