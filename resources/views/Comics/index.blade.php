<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    <h1>Lista Fumetti:</h1>
    <button><a href="{{route('Comics.create')}}">Add Comic</a></button>
    @foreach ($Comics as $Comic)

   <a href="{{route('Comics.show', $Comic->id)}}"><h5>{{$Comic['Titolo']}}</h5></a>
   <div>{{$Comic['type']}}</div>
  <div>{{$Comic['Description']}}</div>

    <form action="{{route('Comics.destroy',$Comic->id)}}" method="POST" onsubmit="alert('Sei sicuro di voler cancellare?')">
    @csrf
    @method('DELETE')

    <input type="submit" value="Delete Comic">

    </form>

    <button><a href="{{ route('Comics.edit', $Comic->id)}}" method="GET">Edit Comic</a></button>


    @endforeach

    <a href="{{route('Comics.create')}}">Add Comic</a>
</body>
</html>
