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
    
<div>
    <form action="{{ route("get.user") }}" method="post">
    @csrf
    <input type="text" name="nome" id="">
    <input type="password" name="password" id="">
    <button type="submit">Criar</button>
    </form>
</div>

</body>
</html>

