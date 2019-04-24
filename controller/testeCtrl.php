<?php

include_once '../model/dbTeste.php';
$teste = new dbTeste();

$sOP = $_POST['sOP'];

if($sOP == "postar"){
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];
$data = $_POST['data'];


    if ($titulo != null && $conteudo != null && $autor !=null && $categoria !=null && $data != null){

        $teste->postar($titulo,$conteudo,$autor,$categoria,$data);

    echo "Postagem com Sucesso!";

    }else{
    echo "Falha na Postagem, Preencha os Campos em Branco";
    }//if

}//if

    elseif ($sOP == "editar"){
    $id_conteudo = $_POST['id_conteudo'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];
    $data = $_POST['data'];
    if ($id_conteudo !=null && $titulo != null && $conteudo != null && $autor !=null && $categoria !=null && $data != null){

        $teste->editarPost($id_conteudo,$titulo,$conteudo,$autor,$categoria,$data);

        echo "Edicao do Post com Sucesso!";

    }else{
        echo "Falha na Edicao, Preencha os Campos em Branco";
    }//if


}//elsif

    elseif ($sOP == "deletar"){
    $id_conteudo = $_POST['id_conteudo'];
    $teste->removerPost($id_conteudo);
    echo "Post Removido Com Sucesso!";

    }//elsif

    elseif ($sOP == "logar") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario != null && $senha != null) {
            if ($teste->login($usuario, $senha) == true) {

                #header("Location: ../view/admin.php");

                    session_start();
                    $_SESSION['userSession'] = $usuario;
                    ?>
                    <!--JS Redirect-->
                    <script type="text/javascript">
                        window.location = '../view/admin.php'
                    </script>
                    <?php

                #exit();

            } else {//if2
                echo "Usuario e Senha nao conferem, Redirecionando...";
                header("Refresh: 1; url=../view/login.php");
            }//else1

        }else{//if1
            echo "Por Favor, preencha ambos os campos, Redirecionando...";
            header("Refresh: 1; url=../view/login.php");
        }//else2

    }//elseif