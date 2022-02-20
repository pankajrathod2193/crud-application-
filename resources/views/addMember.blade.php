<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/style/style.css')}}">
</head>
<body>
<div class="container">
    <h1>Add Member List</h1>
    <h3>member details</h3>
<form action="GetData" method="POST" class="row">
    @csrf
    <input type="text" name="name" placeholder="enter your name"/>
    <input type="text" name="mobile" placeholder="enter your mobile"/>
    <input type="text" name="city" placeholder="enter your city"/>
    <button type="submit">login</button>
</form>
</div>
</body>
</html>
