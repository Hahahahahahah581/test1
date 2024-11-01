<?php

$dbhost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword, $dbName);

if($conexao->connect_errno)
{
    echo "Erro ao cadastrar";
}
else
{
    echo "Cadastro realizado com sucesso!";
}
?>
