<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    Pagina create house:
    Qui la lista di tutti i servizi (che dovranno essere aggiunti come checkbox da selezionare in fase di creazione)
    @foreach($services as $service)

        <ul>
            <li>{{$service->name}}</li>
        </ul>

    @endforeach
</body>
</html>