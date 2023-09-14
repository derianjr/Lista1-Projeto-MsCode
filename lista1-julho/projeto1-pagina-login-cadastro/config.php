<?php 

$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_BD = "usuarios";

// conexão

$conexao = new mysqli($nome_servidor,$nome_usuario,$senha,$nome_BD);
if ($conexao->connect_error){
    die("Conexão Falho:" .$conexao->connect_error);  
}else {
    echo "Conexão Funcionou !!". "<br>";
}
?>