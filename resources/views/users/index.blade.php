<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>
    </head>
    <body>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->userId }}</li>
                <li>{{ $user->userName }}</li>
                <li>{{ $user->userEmail }}</li>
            @endforeach
        </ul>
    </body>
</html>
