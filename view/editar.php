<?php
include_once '../model/dbTeste.php';
include '../controller/sessionCtrl.php';
$teste = new dbTeste();
$t = $teste->listarUm($_GET['id_conteudo']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../imports/bootstrap/css/bootstrap.min.css">

    <title>Editar</title>

</head>
<body class="container">
<h1>Editar Postagem</h1>
<hr>
<div class="row">
    <a class="btn-lg btn-primary col-lg-12 text-center" href="admin.php">Voltar</a>
</div>
<hr>
<form method="post" action="../controller/testeCtrl.php">
    <input type="hidden" name="sOP" value="editar">
    <input type="hidden" name="id_conteudo" value="<?php echo $_GET['id_conteudo']?>">

    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Titulo</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="titulo" value="<?php echo $t[0]['titulo'];?>" placeholder="Titulo">
        </div>
    </div>
    <label id="conteudo">Conteudo</label>
    <div class="form-group row">
        <div class="col-sm-7">
            <textarea title="conteudo" class="form-control" name="conteudo" rows="8"><?php echo $t[0]['conteudo'];?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Autor</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="autor" value= "<?php echo $t[0]['autor'];?>" placeholder="Autor">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Categoria</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="categoria" value="<?php echo $t[0]['categoria'];?>" placeholder="Categoria">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label">Data</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="data" value= "<?php echo $t[0]['data'];?>" placeholder="Data">
        </div>
    </div>

    <input class="btn btn-lg btn-success" type="submit" value="Editar">

</form>


</body>
</html>
