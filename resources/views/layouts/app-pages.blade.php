<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @include('includes.styles')
    </head>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            @include('includes.preloader')

            @include('includes.navbar')

            @include('includes.sidebar')

            @yield('content')

            @include('includes.footer')

            @include('includes.scripts')
            
        </div>
    </body>

</html>