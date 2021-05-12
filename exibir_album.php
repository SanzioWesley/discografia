<?php

require_once('db.php');

$sql = " SELECT * FROM album ";

$objDB = new db();
$link = $objDB -> conecta_mysql();

$resultado_id = mysqli_query($link, $sql);


if($resultado_id){
    $dados_album = array();

    while($linha= mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
        $dados_album[] = $linha;
    }

    var_dump($dados_album);

} else{
    echo 'Erro ao exibir o álbum';
}
 
?>
 