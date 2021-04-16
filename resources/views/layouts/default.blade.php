<!DOCTYPE html>

<html lang="en-US">
    @include('partials.head')

    <body>
        @include('partials.nav')
        <div class="container">
            @yield('content')
        </div>
    </body>

    @include('partials.scripts')
</html>
