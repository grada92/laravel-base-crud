<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="{{route('Comics.store')}}" method="post">
        @csrf
        <label for="Titolo">Inserisci Titolo</label>
        <input type="text" name="Titolo">

        <label for="Copertina">Inserisci Copertina</label>
        <input type="text" name="Copertina">

        <label for="type">Inserisci Tipo di Fumetto</label>
        <input type="text" name="type">

        <label for="Description">Inserisci Descrizione</label>
        <input type="text" name="Description">

        <input type="submit" value="Invia">
    </form>
</body>
</html>
