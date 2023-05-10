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
    <form action="cadastro.php" method="post"></form>

    <label>Nome: </label><input type="text" name="nome" id="nome">

    <br><br>

    <label>CPF: </label><input type="number" name="CPF" id="CPF">

    <br><br>

    <label>Telefone: </label><input type="number" name="telefone" id="telefone">

    <br><br>

    <h3>Estudou em escola: </h3>
    <select name="Escola" >
    <option value="Pública">Pública</option>
    <option value="Particular">Particular</option>
    </select>

    <br><br>

    <input type="submit" value="Enviar" />

    <?php
        include("cadastro.php");

    ?>
</body>
</html>