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

    $pega_valor = "SELECT id_cliente, nome, idade FROM clientes WHERE idade > 30";

    $resultado = $conexao->query($pega_valor);


    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "ID: " . $row["id_cliente"] . "<br>";
            echo "Nome: " . $row["nome"] . "<br>";
            echo "Idade: " . $row["idade"] . "<br>";
            echo "<br>";
    }
    } else {
    echo "Nenhum cliente com idade acima de 30 anos encontrado.";
}
$conexao->close();
?>