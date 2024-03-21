<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="{{ route('signup') }}" method="post">
        @csrf
        username <input type="text" name="username" id=""> <br>
        password <input type="password" name="password" id=""> <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>