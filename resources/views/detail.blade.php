<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <div style="border: 3px solid black; text-align: center">
        <h1>Detail</h1>
        <table style="margin-left: auto; margin-right: auto">
            <tr>
                <td>{{$item->getIdentificationLabel()}}</td><td>{{$item->getIdentification()}}</td>
            </tr>
            <tr>
                <td>name:</td><td>{{$item->name}}</td>
            </tr>
            <tr>
                <td>description:</td><td>{{$item->description}}</td>
            </tr>
            <tr>
                <td>type:</td><td>{{$item->type}}</td>
            </tr>
            <tr>
                <td>author name:</td><td>{{$author->fullName}}</td>
            </tr>
            <tr>
                <td>author email:</td><td>{{$author->email}}</td>
            </tr>
            <tr>
                <td colspan="2"><a href="{{ url('/') }}">Home</a></td>
            </tr>
        </table>
    </div>




</body>
</html>
