<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <div style="border: 3px solid black; text-align: center">
        <h1>Library</h1>
        <form action="/filter" method="POST">
            @csrf
            <span>filter: </span>
            <input name="filter" type="text" placeholder="text" value="{{$filterText}}">
            <button>Submit</button>
        </form>
        <h2>Library items</h2>
        <table style="margin-left: auto; margin-right: auto">
            <tr>
                <th>name</th>
                <th>description</th>
                <th>type</th>
                <th>actions</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->type}}</td>
                    <form action="/detail" method="GET">
                        <td><button >details</button></td>
                        <input type="hidden" name="type" value="{{$item->type}}">
                        <input type="hidden" name="id" value="{{$item->id}}">
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
