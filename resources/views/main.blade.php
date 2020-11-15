<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

    <body>

        @include('partials._preloader')

        @include('partials._header')

        @yield('content')

        @include('partials._footer')

        @include('partials._javascript')

  </body>
</html>
