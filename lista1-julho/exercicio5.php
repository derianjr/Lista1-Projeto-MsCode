<?php
    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $nome_BD = "empresa";
    
    // conexão
    
    $conexao = new mysqli($nome_servidor,$nome_usuario,$senha,$nome_BD);
    if ($conexao->connect_error){
        die("Conexão Falho:" .$conexao->connect_error);  
    }else {
        echo "Conexão Funcionou !!";  
    }

    // Passando os parâmetros do produto especifico que vai ser atualizado
    $idProduto = 1;
    $novoEstoque = 50;

    $atualizar_valor = "UPDATE produtos SET quantidade_estoque = $novoEstoque WHERE id_produto = $idProduto";
    
    if ($conexao->query($atualizar_valor) === TRUE) {
        echo "A quantidade em estoque do produto com ID $idProduto foi atualizada para $novoEstoque.";
    } else {
        echo "Erro ao atualizar a quantidade em estoque: " . $conexao->error;
    }
    
$conexao->close();
?>

