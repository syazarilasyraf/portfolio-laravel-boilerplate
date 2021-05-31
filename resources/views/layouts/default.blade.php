<!DOCTYPE html>
<html lang="en-US">

    @include('partials.head')

    <body style="background-color:#050505;">
        @include('partials.nav')

        @yield('content')

    @include('partials.scripts')
    </body>

</html>
