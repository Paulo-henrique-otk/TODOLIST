<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/createUser.css">
    <title>Create User</title>
</head>
<body>
    
<div class="container">
    <form action="{{ route("get.user") }}" method="post" class="form-logon">
    @csrf
    <p>Cadastre-se</p>
    <label for="nome">Nome de usuário
    <input type="text" name="nome" id="">
    </label>
    <label for="password">Senha
    <input type="password" name="password" id="">
    </label>
    <button type="submit">Criar</button>
    </form>
</div>

</body>
</html>

