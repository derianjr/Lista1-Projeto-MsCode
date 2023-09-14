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

   $pega_valor = "SELECT id_produto, nome, preco FROM produtos WHERE preco <= 50";
 
    $resultado = $conexao->query($pega_valor);
    
    if ($resultado->num_rows > 0) {
        // Exibir os resultados
        while ($row = $resultado->fetch_assoc()) {
            echo "ID do Produto: " . $row["id_produto"] . "<br>";
            echo "Nome do Produto: " . $row["nome"] . "<br>";
            echo "Preço do Produto: $" . $row["preco"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum produto com preço igual ou inferior a 50 encontrado.";
    }
    
$conexao->close();
?>