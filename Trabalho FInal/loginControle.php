<?php
    session_start();
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['senha'])){
        if($_REQUEST['usuario'] == "Esc" && $_REQUEST['senha'] == "1212"){
            $_SESSION['logado'] = true;
            // se as informações estão certas, manda para a letla de login
            header("location:Lista.php");
        }else{
            // se não estiver certo, deixa o login = 0, para mostrar uma mensagem feia na tela de login
            header("location:login.php?login=0");
        }
    }else{
        //caso o login e a senha não foram inseridos
        header("location:login.php?");
    }
?>