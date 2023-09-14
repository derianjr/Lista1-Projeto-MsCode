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
    
    $pega_valor = "SELECT id_funcionario, nome, cargo FROM funcionarios WHERE cargo = 'Gerente'";

    $resultado = $start->query($pega_valor);

    if ($resultado->num_rows > 0) {
        // Exibir os resultados
        while ($row = $resultado->fetch_assoc()) {
            echo "ID do Funcionário: " . $row["id_funcionario"] . "<br>";
            echo "Nome do Funcionário: " . $row["nome"] . "<br>";
            echo "Cargo do Funcionário: " . $row["cargo"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum funcionário com o cargo de Gerente encontrado.";
    }
$conexao->close();
?>