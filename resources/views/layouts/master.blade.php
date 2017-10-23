<!DOCTYPE html>
<html>

    @include('layouts.head')

    <body>
        <!-- navbar -->
    @include('layouts.nav')

    <!-- homepage -->
    @yield('home')

    <!-- loads users view -->
        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <!-- loads barbershop view -->
        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('barbershop')
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('appt')
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <!-- footer -->
        @include('layouts.footer')
    </body>
</html>
