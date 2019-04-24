<?php
include_once '../model/dbTeste.php';
include '../controller/sessionCtrl.php';
$teste = new dbTeste();

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../imports/bootstrap/css/bootstrap.min.css">
<style>
    .navbar-brand{
        margin: 0;
        padding: 0;
    }
    .logo{
        height: 55px;

        padding-bottom: 5px;
    }
    .navbar-inverse{
        height: 70px;
        padding-top: 10px;
    }

</style>

    <title>Blog</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">

        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="../image/blogLogo.png" class="img-responsive logo"></a>
        </div>

        <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Menu<span class="caret"></span>
                        <ul class="dropdown-menu">
                            <li><a href="#">AAA</a></li>
                            <li><a href="#">BBB</a></li>
                            <li><a href="#">CCC</a></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="#">XXXX</a></li>
                        </ul>
                    </a>
                </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
<div class="row">
    <a class="text-center col-md-12 btn-lg btn-primary " href="postar.php">Adicionar Novo Post</a>
</div>
    <hr>
    <?php foreach ($teste->listarTodos() as $t){?>
        ID Conteudo: <?php echo $t['id_conteudo'];?>
        <h1><?php echo $t['titulo']."<br>";?></h1>
        <div class="well" style=" word-wrap: break-word;"><?php echo $t['conteudo']."<br>";?></div>
        Autor: <b><?php echo $t['autor'];?></b>
        Categoria: <b><?php echo $t['categoria']."<br>";?></b>
        <b><?php echo $t['data']."<br>";?></b>
        <a class="btn btn-success " href="editar.php?id_conteudo=<?php echo $t['id_conteudo']?>">Editar Post</a>
        <a class="btn btn-danger " href="remover.php?id_conteudo=<?php echo $t['id_conteudo']?>">Deletar Post</a>
        <hr>

    <?php }?>

    <!-- Imports Corretos -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../imports/bootstrap/js/bootstrap.min.js"></script>

</div>
</body>
</html>