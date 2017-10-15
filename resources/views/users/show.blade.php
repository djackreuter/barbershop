<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Users</title>
    </head>
    <body>
        <ul>
                <li>User Id: {{ $user->id }}</li>
                <li>User Name: {{ $user->userName }}</li>
                <li>User Email: {{ $user->userEmail }}</li>
        </ul>
    </body>
</html>