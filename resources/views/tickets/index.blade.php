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
    <h1>Page Tickets</h1>
    <ul>
        <li><a href="{{ route("tickets.index") }}">Tickets</a></li>
        <li><a href="{{ route("ticket_types.index") }}">Ticket Types</a></li>
        <li><a href="{{ route("trains.index") }}">Trains</a></li>
        <li><a href="{{ route("train_types.index") }}">Train Types</a></li>
    </ul>
    <table>
        <thead>
            <th>Date</th>
            <th>Price</th>
            <th>Train Name</th>
            <th>Ticket Type</th>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{$ticket -> date}}</td>
                    <td>{{$ticket -> price}}</td>
                    <td>{{$ticket -> train -> name}}</td>
                    <td>{{$ticket -> ticket_type -> type}}</td>
                    <td>
                        <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('tickets.create')}}">Create</a>
</body>
</html>