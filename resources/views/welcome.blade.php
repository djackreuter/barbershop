<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>
    </head>
    <body>
        <ul>
			  @foreach ($tasks as $task)
            <li>{{ $task }}</li>
			  @endforeach
        </ul>
    </body>
</html>
