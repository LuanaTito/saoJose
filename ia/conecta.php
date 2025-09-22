<?php
// Dados para a conexao local (SEU COMPUTADOR)
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "saojose_contato";

// Conectando ao banco
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificando erros na conexão
if ($conexao->connect_error) {
    die("Erro ao conectar: " . $conexao->connect_error);
}

// Definir padrão de caracteres
mysqli_set_charset($conexao, "utf8");

// Definição Fuso horário
date_default_timezone_set("America/Sao_Paulo");
?>