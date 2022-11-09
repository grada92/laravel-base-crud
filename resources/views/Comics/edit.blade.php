<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Comic</title>
</head>
<body>
    <h2>Edit Comic</h2>
    <form action="{{route('Comics.update',$Comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="Titolo">Inserisci Titolo</label>
        <input type="text" name="Titolo" value="{{$Comic->Titolo}}">

        <label for="Copertina">Inserisci Copertina</label>
        <input type="text" name="Copertina" value="{{$Comic->Copertina}}">

        <label for="type">Inserisci Tipo di Fumetto</label>
        <input type="text" name="type" value="{{$Comic->type}}">

        <label for="Description">Inserisci Descrizione</label>
        <input type="text" name="Description" value="{{$Comic->Description}}">

        <input type="submit" value="Invia">
    </form>
</body>
</html>
