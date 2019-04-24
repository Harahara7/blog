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
    <title>Deletar Post</title>
</head>
<body class="container">

<form method="post" action="../controller/testeCtrl.php">
<input type="hidden" name="sOP" value="deletar">
    <input type="hidden" name="id_conteudo" value="<?php echo $_GET['id_conteudo'];?>">

    <h3>Deseja Realmente Remover esse Post?</h3>

    <input class="btn btn-lg btn-danger" type="submit" value="Deletar">


</form>
</body>
</html>