<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>TODOLIST</title>
</head>
<body>
<div class="container">
    
    <form action="{{ route("login.user") }}" method="post" class="form-login">
        @csrf
        <p>Login</p>
        <label for="nome"> Usuário
        <input type="text" name="nome">
        </label>
        <label for="senha"> Senha
        <input type="text" name="senha" >
        </label>
        <button type="submit">Logar</button>
        <a href="{{ route("create.user") }}">Criar Conta</a>
    </form>
    
</div>
</body>
</html>
