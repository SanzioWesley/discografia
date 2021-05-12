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
                <a href="index.php"><img src="imagens/logo.png" /></a>
            </div>

            <div>
                <ul class="nav navbar-nav navbar-right">
                    <h1>Discografia</h1>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <br /><br />
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Criar Álbum</h3>
            <br />
            <form method="get" action="registra_album.php" id="formCriarAlbum">
                <div class="form-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="ano" name="ano" placeholder="ano" required="requiored">
                </div>

                <button type="submit" class="btn btn-success form-control">Criar</button>
                <button type="submit" class="btn btn-default form-control">
                <a href="exibir_album.php">
                       Exibir
                    </a></button>
                <!-- <button type="submit" class="btn btn-primary form-control">Atualizar</button>
                <button type="submit" class="btn btn-danger form-control">Excluir</button> -->
            </form>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>