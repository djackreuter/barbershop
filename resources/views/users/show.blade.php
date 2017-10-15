<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Users</title>
    </head>
    <body>
        <ul>
            @foreach ($user as $users)
                <li>{{ $users->userName }}</li>
            @endforeach
        </ul>
    </body>
</html>