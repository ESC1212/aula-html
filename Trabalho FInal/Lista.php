<?php
        include_once("usuarioDAO.php");
        session_start();
        if($_SESSION['logado'] == false){
            header("location:Login.php");
        }
        //ve se 'pesquisa' existe
        if(isset($_REQUEST['pesquisa'])){
            //se existir, ele realiza a pesquisa
            $pesquisa = $_REQUEST['pesquisa'];
            $usuarios = getUsuario($pesquisa);
        }else{
            //caso não, ele só pega tudo
            $usuarios = getUsuarios();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="TF.CSS">
</head>
<body id="lista">
    <form id="header" style="grid-area: pesq;" action="lista.php" method="get">
        <input type="text" name="pesquisa" style="grid-area: bar;">
        <input type="submit" value="Pesquisar" id="pesqui" style="grid-area: botao;">
    </form>
    <div id="list" style="grid-area: list;">
    <fieldset>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                    <?php 
                        for($i=0;$i<count($usuarios);$i++){
                    ?>
                            <tr>
                                <td ><?php echo $usuarios[$i]['idusuario'];?></td>
                                <td ><?php echo $usuarios[$i]['nome'];?></td>
                                <td ><?php echo $usuarios[$i]['dataNasc'];?></td>
                                <td ><?php echo $usuarios[$i]['email'];?></td>
                                <td ><?php echo $usuarios[$i]['telefone'];?></td>
                                <td><form action="Editar.php" method="post">
                                    <!-- manda o tipo da edição e o id para a tela de edição/cadastro -->
                                    <!-- o tipo muda para a tela de edição -->
                                    <input type="text" name="tipo" value="Editar" hidden>
                                    <input type="number" name="id" value="<?php echo $usuarios[$i]['idusuario'];?>" hidden>
                                    <input type="submit" value="Editar">
                                </form></td>
                            </tr>
                    <?php
                        }
                    ?>
                </table>
            </fieldset>
    </div>
    <form action="Editar.php" method="post" style="grid-area: boto;">
                 <!-- muda o tipo da tela para Cadastro -->
                 <input type="text" name="tipo" value="Cadastrar" hidden>
                 <input type="submit" id="CadastrarButton" value="Cadastrar">
            </form>
    <a href="logout.php" style="grid-area: logout;"><button id="CadastrarButton">Sair</button></a>
</body>
</html>