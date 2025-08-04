<?php
    require 'conexao.php';
    $titulo = "titulo1";
    $genero = "fantasia";
    $autor = "Rafael Ramos";
    $paginas = 355;
    $ano =
    $sql = "INSERT INTO bibloteca (titulo, genero, ano, autor, paginas)";
    $stmt-> $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':estoque', $estoque);

    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto."
    }
    
?>