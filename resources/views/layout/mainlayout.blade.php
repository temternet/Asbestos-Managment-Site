<!DOCTYPE html>

<html lang="en">

    <head>

        @include('layout.partials.head')

    </head>

    <body>

    <?php
        $token = 1;
        if($token == 1) {
            echo "view('layout.partials.nav')";
        }
    
    ?>
        @yield('content')
        @include('layout.partials.footer')
        @include('layout.partials.footer-scripts')

    </body>
</html>