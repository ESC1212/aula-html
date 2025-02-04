<?php
    session_start();
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['senha'])){
        if($_REQUEST['usuario'] == "admin" && $_REQUEST['senha'] == "1597"){
            $_SESSION['logado'] = true;
            header("location:Lista.php");
        }else{
            header("location:login.php?login=0");
        }
    }else{
        header("location:login.php?");
    }
?>