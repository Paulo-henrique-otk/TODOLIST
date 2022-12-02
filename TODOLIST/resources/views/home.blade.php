<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOLIST</title>
</head>
<body>
<form action="{{ route("login.user") }}" method="post">
@csrf
<input type="text" name="nome" id="">
<input type="text" name="senha" >
<button type="submit">Logar</button>
<a href="{{ route("create.user") }}">Criar Conta</a>
</form>
</body>
</html>
