<?php
    include_once("db.php");
    include_once("pessoa_da.php");

    if(isset($_POST["acao"]) && $_POST["acao"] == "cadastrar"){
        if(isset($_POST["nome"]) && isset($_POST["email"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            save($nome,$email);
            header("Location: listar.php");
        }else{
            echo "Não deu certo";
        }
    }
    if(isset($_POST["acao"]) && $_POST["acao"] == "editar"){

    }
    
?>