<?php
    include_once("usuarioDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    if(isset($_REQUEST['id'])){
        delete($_REQUEST['id']);
        header("location:lista.php");
    }
?>