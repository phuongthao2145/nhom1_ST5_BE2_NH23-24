<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!--<ul>
        <li><a href="{{ url('index') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
    </ul>  -->
    <p>Xin chao {{ $data->username}}</p>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
    </ul>   
    <h1>This is index page</h1>
</body>
</html>