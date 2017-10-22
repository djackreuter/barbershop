@include('layouts.head')

@include('layouts.nav')
        <ul>
                <li>User Id: {{ $user->id }}</li>
                <li>User Name: {{ $user->userName }}</li>
                <li>User Email: {{ $user->userEmail }}</li>
        </ul>

@include('layouts.footer')
