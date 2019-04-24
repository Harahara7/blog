<?php
include_once 'model/dbTeste.php';
$teste = new dbTeste();
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once 'view/imports.php'?>
    <?php include_once 'view/style.php'?>
    <?php include_once 'view/scripts.php'?>

            <script type="text/javascript">
            $(document).ready(function () {
                $("#postagem")
                    .hide()
                    .delay('200')
                    .fadeIn(2000);

            })
            </script>

    <title>Blog</title>
</head>
<body>
<?php include_once 'view/navbar.php'?>
<div id="postagem" class="container">

    <hr>
<?php foreach ($teste->listarCinco() as $t){?>

   <?php $t['id_conteudo'];?>

    <h1><?php echo $t['titulo']."<br>";?></h1>
    <div class="well" style=" word-wrap: break-word;"><?php echo $t['conteudo']."<br>";?></div>
    Autor: <b><?php echo $t['autor'];?></b>
    Categoria: <b><?php echo $t['categoria']."<br>";?></b>
    <b><?php echo $t['data']."<br>"."<hr>";?></b>

    <?php }?>

</div>

</body>
</html>