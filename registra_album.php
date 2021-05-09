<?php

   require_once('db.php');

   $nome = $_POST['nome'];
   $ano = $_POST['ano'];
  
   
   $objDB = new db();
   $link = $objDB -> conecta_mysql();

   $sql = "INSERT INTO album (nome, ano) VALUES ('$nome', $ano)";

   //executar a query
   mysqli_query($link, $sql);


   // if(mysqli_query($link, $sql)){
   //    echo "Álbum registrado com sucesso!";
   // }else{
   //    echo "Erro ao registrar o álbum!";
   // }

?>