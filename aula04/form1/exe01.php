<?php
   if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   $nome = $GET ['nome'];
   $nota1 = $GET ['nota1'];
   $nota2 = $GET ['nota2'];
   $nota3 = $GET ['nota3'];
      if (empty($nome) || empty($nota1) || empty($nota2) || empty($nota3)) {
          $erro = 'Por favor, preencha todos os campos!';
      } elseif (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3)) {
          $erro = 'As notas devem ser números!';
      } else {
          $media = ($nota1 + $nota2 + $nota3) / 3;
      }
  }
  ?>