<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
<form action="{{ route("get.user") }}" method="post">
@csrf
<input type="text" name="nome" id="">
<input type="password" name="password" id="">
<button type="submit">Criar</button>
</form>
</body>
</html>

