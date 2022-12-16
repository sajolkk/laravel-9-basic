<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{ $user->name }}
    <br>
    {{ count($user->posts) }} --}}
    @foreach ($user as $item)
        {{ $item->name }}
        <br>
        {{ $item->NameT() }}
        <br>
        {{ count($item->posts) }}
        <br>
    @endforeach
</body>
</html>