<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../imports/bootstrap/css/bootstrap.min.css">

    <style>
        form{
            position: absolute;
            width: 400px;
            height: 200px;
            z-index: 15;
            top: 50%;
            left: 50%;
            margin: -150px 0 0 -220px;
        }
        .well{
            padding-bottom: 70px;
        }
    </style>

</head>
<body class="container">
<form method="post" action="../controller/testeCtrl.php">
       <input type="hidden" name="sOP" value="logar">
    <div class="well">
    <h2 class="text-center">Login</h2>
    <div class="form-group">
        <label>Usuario</label>
        <input name="usuario" type="text" class="form-control" placeholder="Entre com seu Usuario">

    </div>
    <div class="form-group">
        <label >Senha</label>
        <input name="senha"  type="password" class="form-control"  placeholder="Entre com sua Senha">
    </div>
    <button  type="submit" class="col-lg-12 btn btn-lg btn-primary">Acessar</button>
    </div>

</form>
</body>
</html>
