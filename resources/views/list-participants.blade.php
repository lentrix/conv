<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Participants</title>
</head>
<body>
    <ol>
        @foreach($parts as $p)

        <li>{{ $p->member->last_name }}, {{ $p->member->first_name }}</li>

        @endforeach
    </ol>
</body>
</html>
