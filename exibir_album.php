<?php

    session_start();

    require_once('db.php');

    $sql = " SELECT * FROM album ";
    // $sql = " SELECT nome from  album";
	// $sql = SELECT nome FROM `discografia`.`album`;

    $objDB = new db();
    $link = $objDB -> conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);


    if($resultado_id){
        $dados_album = array();

        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            $dados_album[] = $linha;
        }

        // var_dump($dados_album);
        

    } else{
        echo 'Erro ao exibir o álbum';
    }
 
?> 



<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Discografia</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>

	<body>

		<!-- Static navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-header">
                		<a href="index.php"><img src="imagens/logo.png" /></a>
					</div>
            </div>

			<div>
                <ul class="nav navbar-nav navbar-right">
                    <a href="criar_album.php">
                        <h1 style="color: black;">Discografia</h1>
                    </a>
                </ul>
            </div>	
		</nav>


		<div class="container">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
					
                        <h4><?= $_SESSION['dados_album'] ?></h4>
                        <h4><?=   "<h2>" . $dados_album . "</h2>"; ?></h4>
						<hr />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Digite uma musica" maxlength="140" />
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Música</button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
 