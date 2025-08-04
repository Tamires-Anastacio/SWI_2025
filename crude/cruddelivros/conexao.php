<?php
    $host = 'localhost';
    $dbname = 'bd_biblioteca';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        //Habilia erros do PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem-sucedida!";
    } catch (PDOExcepition $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }
?>