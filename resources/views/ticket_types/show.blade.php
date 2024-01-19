<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
       <p>Type: {{$ticket_type->type}}</p> <br>

       <a href="{{route('ticket_types.index')}}">Volver</a>
        
</body>
</html>