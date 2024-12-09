<?php
    include_once("db.php");
    include_once("pessoa_da.php");

    if(isset($_POST["nome"]) && isset($_POST["email"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        save($nome,$email);
    }else{
        echo "Não deu certo";
    }
?>