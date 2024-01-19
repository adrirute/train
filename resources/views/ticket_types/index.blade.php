<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <style>
        ul {
            list-style: none;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
            border: 1px solid black;
            background-color: bisque;
        }
        a {
            text-decoration: none;
        }
        table {
            border: 2px solid black;
        }
        th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Page Tickets Type</h1>
    <ul>
        <li><a href="{{ route("tickets.index") }}">Tickets</a></li>
        <li><a href="{{ route("ticket_types.index") }}">Ticket Types</a></li>
        <li><a href="{{ route("trains.index") }}">Trains</a></li>
        <li><a href="{{ route("train_types.index") }}">Train Types</a></li>
    </ul>
    <table>
        <thead>
            <th>Ticket Type</th>
        </thead>
        <tbody>
            @foreach ($ticket_types as $ticket_type)
                <tr>
                    <td>{{$ticket_type -> type}}</td>
                    <td>
                        <form action="{{ route('ticket_types.show', ['ticket_type' => $ticket_type->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ticket_types.edit', ['ticket_type' => $ticket_type->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ticket_types.destroy', ['ticket_type' => $ticket_type->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('ticket_types.create')}}">Create</a>
</body>
</html>