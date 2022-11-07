<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista Fumetti:</h1>
    @foreach ($Comics as $Comic)

   <a href="{{route('Comics.show', $Comic->id)}}"><h5>{{$Comic['Titolo']}}</h5></a>




    @endforeach
</body>
</html>
