<?php

function conectar(){
    try{
        $con = new PDO('mysql:host=localhost;dbname=dbBlog;charset=utf8','root','');
        //echo 'Success!';
        return $con;
    }catch(exception $erro){
        echo "Unable to connect DB!";
        return false;
    }
}//conectar

//conectar();