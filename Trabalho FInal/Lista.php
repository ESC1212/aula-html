<?php
        include_once("usuarioDAO.php");
        session_start();
        if($_SESSION['logado'] == false){
            header("location:Login.php");
        }
        if(isset($_REQUEST['pesquisa'])){
            $pesquisa = $_REQUEST['pesquisa'];
            $usuarios = getUsuario($pesquisa);
        }else{
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
    <div id="header" style="grid-area: pesq;">
        <input type="text" style="grid-area: bar;">
        <button id="pesqui" style="grid-area: botao;">Pesquisar</button>
    </div>
    <div id="list" style="grid-area: list;"></div>
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
                                <td class="borda"><?php echo $usuarios[$i]['idusuario'];?></td>
                                <td class="borda"><?php echo $usuarios[$i]['nome'];?></td>
                                <td class="borda"><?php echo $usuarios[$i]['dataNasc'];?></td>
                                <td class="borda"><?php echo $usuarios[$i]['email'];?></td>
                                <td class="borda"><?php echo $usuarios[$i]['telefone'];?></td>
                                <td><form action="cadastroEdicao.php" method="post">
                                    <input type="text" name="tipo" value="Editar" hidden>
                                    <input type="number" name="id" value="<?php echo $usuarios[$i]['idusuario'];?>" hidden>
                                    <input type="submit" value="Editar">
                                </form></td>
                                <td><form action="usuariosControle.php" method="post">
                                    <input type="number" name="id" value="<?php echo $usuarios[$i]['idusuario'];?>" hidden>
                                    <input type="submit" value="Excluir" id="btExcluir">
                                </form></td>
                            </tr>
                    <?php
                        }
                    ?>
                </table>
            </fieldset>
    <button id="CadastrarButton" style="grid-area: boto;">Cadastrar</button>
    <button id="CadastrarButton" style="grid-area: logout;">Sair</button>
</body>
</html>