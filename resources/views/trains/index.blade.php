<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
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
            align-content: center;
        }
        th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Pagina de Trenes</h1>
    <ul>
        <li><a href="{{ route("tickets.index") }}">Tickets</a></li>
        <li><a href="{{ route("ticket_types.index") }}">Ticket Types</a></li>
        <li><a href="{{ route("trains.index") }}">Trains</a></li>
        <li><a href="{{ route("train_types.index") }}">Train Types</a></li>
    </ul>
    <table>
        <thead>
            <th>Name</th>
            <th>Passengers</th>
            <th>Year</th>
            <th>Train Type</th>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train -> name}}</td>
                    <td>{{$train -> passengers}}</td>
                    <td>{{$train -> year}}</td>
                    <td>{{$train -> train_type -> type}}</td>
                    <td>
                        <form action="{{ route('trains.show', ['train' => $train->id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.edit', ['train' => $train->id]) }}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trains.destroy', ['train' => $train->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>                   
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('trains.create')}}">Create</a>



  
</body>
</html>