<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    member list
</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>mobile</td>
        <td>city</td>
        <td>Delete</td>
        <td>update</td>
    </tr>
    @foreach($devices as $table)
    <tr>
        <td>{{$table['id']}}</td>
        <td>{{$table['name']}}</td>
        <td>{{$table['mobile']}}</td>
        <td>{{$table['city']}}</td>
        <td><a href={{"delete/".$table['id']}}>Delete</a></td>
        <td><a href={{"edit/".$table['id']}}>Update</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>
