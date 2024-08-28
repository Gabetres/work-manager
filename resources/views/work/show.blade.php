<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work</title>
</head>
<body>
    <h1>WORK SHOW LISTS</h1>

    <ul>
        @foreach ($works as $work)
            <li>{{ $work }}</li>
        @endforeach
    </ul>

</body>
</html>