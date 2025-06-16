<?php
    include_once 'Livro.class.php';
    $livro = new Livro('Diva', 'José de Alencar', true);



    echo "Exibindo o status do livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";
    echo "Fazendo um empréstimo <br>";
    $livro->Emprestar();
    echo "<hr>";
    echo "Exibindo o status do livro <br>";
    echo $livro=>ExibirStatus();
    echo "<hr>";

?>