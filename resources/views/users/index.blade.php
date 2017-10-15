<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>
    </head>
    <body>
        <ul>
            @foreach ($users as $user)
                <li>
                    <a href="/users/{{ $user->id }}">
                        {{ $user->userName }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
