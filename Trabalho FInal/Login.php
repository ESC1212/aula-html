<?php
    session_start();
    if(isset($_SESSION['logado'])){
        if($_SESSION['logado'] == true){
            header("location:lista.php");
        }
    }
    if(isset($_REQUEST['login'])){
        if($_REQUEST['login'] == 0){
            echo "<p> Usuario ou senha Inválidos</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="TF.CSS">
</head>
<body class="login">
        <form id="login" action="loginControle.php" method="post">
            <label style="grid-area: TXT1;" for="usuario">Usuario: </label>
            <input id="logininput" style="grid-area: Login;" type="text" name="usuario" id="usuario">
            <label style="grid-area: TXT2;" for="senha">Senha: </label>
            <input id="logininput" style="grid-area: Senha;" type="password" name="senha" id="senha">
            <input id="loginButton" style="grid-area: botao;" type="submit" value="Login">
        </form>   
</body>
</html>