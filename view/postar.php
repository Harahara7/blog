<?php
include '../controller/sessionCtrl.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../imports/bootstrap/css/bootstrap.min.css">

    <title>Postar</title>



</head>
<body class="container">
    <h1>Adicionar Postagem</h1>
<hr>
    <div class="row">
    <a class="btn-lg btn-primary col-lg-12 text-center" href="admin.php">Voltar</a>
    </div>
    <hr>
<form method="post" action="../controller/testeCtrl.php">
<input type="hidden" name="sOP" value="postar">

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Titulo</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="titulo" placeholder="Titulo">
        </div>
    </div>
    <label>Conteudo</label>
    <div class="form-group row">
        <div class="col-sm-7">
        <textarea class="form-control" name="conteudo" rows="8"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Autor</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="autor" placeholder="Autor">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Categoria</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="categoria" placeholder="Categoria">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Data</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="data" placeholder="Data">
        </div>
    </div>

        <input class="btn btn-lg btn-default" type="submit" value="Postar">

</form>


</body>
</html>
