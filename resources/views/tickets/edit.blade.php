<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tickets.update', ['ticket' => $ticket -> id]) }}" method="post">
        @csrf
        {{method_field('PUT')}}
        <label for="">Date</label>
        <input type="date" name="date" value="{{$ticket -> date}}"><br><br>

        <label for="">Price</label>
        <input type="number" name="price" value="{{$ticket -> price}}"><br><br>

        <label for="">Train</label>
        <select name="train_id" value="{{$ticket -> train_id}}" required>
            <option value="" selected hidden>{{$ticket->train->name}}</option>
            @foreach ($trains as $train)
                <option value="{{$train->id}}">{{$train->name}}</option>
            @endforeach
        </select>

        <label for="">Type Ticket</label>
        <select name="ticket_type_id" value="{{$ticket -> ticket_type_id }}" required>
            <option value="" selected hidden>{{$ticket->ticket_type->type}}</option>
            @foreach ($ticket_types as $ticket_type)
                <option value="{{$ticket_type->id}}">{{$ticket_type->type}}</option>
            @endforeach
        </select>
        <input type="submit" value="Crear" name="">
    </form>
</body>
</html>