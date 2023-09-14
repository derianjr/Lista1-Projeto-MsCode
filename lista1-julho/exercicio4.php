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

   $pega_valor = "SELECT id_pedido, data, valor, status FROM pedidos WHERE YEAR(data) = 2023";
 
    $resultado = $conexao->query($pega_valor);

    if ($resultado->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            echo "ID do Pedido: " . $row["id_pedido"] . "<br>";
            echo "Data do Pedido: " . $row["data"] . "<br>";
            echo "Valor do Pedido: $" . $row["valor"] . "<br>";
            echo "Status do Pedido: " . $row["status"] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum pedido realizado em 2023 encontrado.";
    }
    
$conn->close();
?>