<?php
require_once('DBConnect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Vestibulando</title>
</head>
<body>
    <h1>Cadastro Vestibulando</h1>
    <form method="post" action="user.php">

    <label>Nome: </label><input type="text" name="nome" id="nome" placeholder="Digite seu nome completo">

    <br><br>

    <label>CPF: </label><input type="number" name="cpf" id="cpf" placeholder="Digite seu CPF">

    <br><br>

    <label>Telefone: </label><input type="number" name="telefone" id="telefone" placeholder="Digite seu telefone">

    <br><br>

    <button type="submit">Cadastrar</button>
    </form>
</body>
</html>