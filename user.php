<?php
require_once('DBConnect.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$objeto1 = new DBConnect(); 

if ($objeto1->inserir_dados($nome, $cpf, $telefone)){
    print("Cadastro realizado!");
};

unset($objeto1);

$objeto1 = new DBConnect(); 
?>