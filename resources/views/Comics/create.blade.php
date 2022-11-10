<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h2>Add Comic</h2>
    <form action="{{route('Comics.store')}}" method="post">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>

                @endforeach
            </ul>

        </div>

        @endif
        <label for="Titolo">Inserisci Titolo</label>
        <input type="text" name="Titolo" value="{{ old('Titolo', '') }}">

        <label for="Copertina">Inserisci Copertina</label>
        <input type="text" name="Copertina" value="{{ old('Copertina', '') }}">

        <label for="type">Inserisci Tipo di Fumetto</label>
        <input type="text" name="type" value="{{ old('type', '') }}">

        <label for="Description">Inserisci Descrizione</label>
        <input type="text" name="Description" value="{{ old('Description', '') }}">

        <input type="submit" value="Invia">
    </form>
</body>
</html>
