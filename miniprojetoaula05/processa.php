<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'aluno@email.com' && $senha == '1234'){
        //segue para a página: privada.php
        $nome = "Aluno";
        header ('Location: privada.php?nome='.$nome);   
    }else{
        //segue para a página: erro.php
        header('Location: erro.php');
    }

?>