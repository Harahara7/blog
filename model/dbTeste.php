<?php

class dbTeste{

    private $conexao;

    function __construct()
    {
        require 'dbConexao.php';
        conectar();
        $this->conexao = conectar();
    }//construtor

    public function listarTodos()
    {
        $query = "SELECT * FROM conteudo ORDER BY id_conteudo DESC";
        $statement = $this->conexao->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($result != null && $result != false) {
            return $result;
        } else {
            return false;
        }//if else
    }

    public function listarCinco(){
        $query = "SELECT * FROM (SELECT * FROM conteudo ORDER BY id_conteudo DESC  LIMIT 5) sub ORDER BY id_conteudo DESC ;";
        $statement = $this->conexao->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($result != null && $result != false){
            return $result;
        }else{
            return false;
        }//if else

    }//listarCinco

    public function listarUm($id_conteudo){
        $query = "Select * from conteudo WHERE  id_conteudo = {$id_conteudo}";
        $statement = $this->conexao->query($query);
        //metodo query eh usado para retornar algum dado do BD.
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($result != null && $result != false){
            return $result;
        }else{
            return false;
        }//if else

    }//listarUm

    public function postar($titulo,$conteudo,$autor,$categoria,$data){
    $query = "Insert INTO conteudo( titulo, conteudo, autor, categoria, data) VALUES ('{$titulo}','{$conteudo}','{$autor}','{$categoria}','{$data}')";
    $result = $this->conexao->exec($query);
    //metodo exec eh usado para executar a query ao BD.
        if($result){
            return true;
        }else{
            return false;
        }//if else
    }//postar

    public function cadastrar($usuario,$senha){
        $query = "INSERT INTO usuario (usuario, senha) VALUES ('{$usuario}','{$senha}')";
        $result = $this->conexao->exec($query);
        if ($result){
            return true;
        }else{
            return false;
        }//if else
    }//cadastrar

    public function editarPost($id_conteudo,$titulo,$conteudo,$autor,$categoria,$data){
        $query = "UPDATE conteudo SET titulo='{$titulo}', conteudo='{$conteudo}',autor='{$autor}',categoria='{$categoria}',data='{$data}' WHERE id_conteudo={$id_conteudo}";
        $result = $this->conexao->exec($query);
        if ($result){
            return true;
        }else{
            return false;
        }//if else
    }//editarPost

    public function removerPost($id_conteudo){
        $query= "Delete From conteudo WHERE id_conteudo={$id_conteudo}";
        $result = $this->conexao->exec($query);

        if ($result){
            return true;
        }else{
            return false;
        }//if else
    }//removerPost

    public  function login($usuario, $senha){
        $query = "Select * From usuario WHERE usuario = '{$usuario}' and senha='{$senha}'";
        $statement = $this->conexao->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return true;
        }else{
            return false;
        }//if else

    }//login


}//class