<?php
//dados para a conexão local(seu computador)
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "contato_movase";

//conexão do banco
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
// definindo padrão de caracteres
mysqli_set_charset($conexao, "UTF8");
//definindo fuso horário
date_default_timezone_set("America/Sao_Paulo");
//verificando erro
if (mysqli_connect_error()){
    die("Erro ao se conectar" . mysqli_connect_error());
}
?>