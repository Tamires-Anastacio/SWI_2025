<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $nome = $GET ['nome'];
   $nota1 = $GET ['n1'];
   $nota2 = $GET ['n2'];
   $nota3 = $GET ['n3'];

   if (empty($n1) || empty($n2) || empty($n3)) {
       $erro = 'Por favor, preencha todos os campos!';
   } elseif (!is_numeric($numero1) || !is_numeric($numero2) || !is_numeric($3)) {
       $erro = 'Todos os valores devem ser números!';
   } else {
       $maiorNumero = max($n1, $n2, $n3);
   }
}
?>
   