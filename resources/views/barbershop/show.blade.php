<!DOCTYPE html>
<html>
    @include('layouts.head')
    <body>
        @include('layouts.nav')
        <ul>
            <li>Barbershop: {{ $barbershop->barbershopName }}</li>
            <li>About Us: {{ $barbershop->barbershopBio }}</li>
        </ul>
        @include('layouts.footer')
    </body>
</html>