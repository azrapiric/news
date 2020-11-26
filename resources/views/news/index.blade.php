<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table>
            <thead>
                <th>ID</th>
                <th>Naziv vijesti</th>
                <th>Akcija</th>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><a href={{route('show',['id'=>$item->id])}} class="btn btn-success">Prikaži</a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>

</body>


</html>
