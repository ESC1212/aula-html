<?php
    include_once("usuarioDAO.php");
    session_start();
    if($_SESSION['logado'] == false){
        header("location:login.php");
    }
    $titulo = $_REQUEST['tipo'];
    if($_REQUEST['tipo'] == "Editar"){
        $usuario = getUsuariobyid($_REQUEST['id']);
    }else{
        $usuario = array("nome"=>"","dataNasc"=>"","email"=>"","telefone"=>"");
    }
    if(!isset($_REQUEST['id'])){
        $_REQUEST['id'] = null;
    }
    $hideExcluir = ($_REQUEST['tipo'] == "Cadastrar") ? "exluiri" : "exluir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="TF.CSS">
</head>
<body id="editar">
    <div id="back" style="grid-area: pesq;">
        <!-- Manda o usuário devolta pra a tela de lista -->
        <a style="grid-area: back" href="lista.php" ><button id="Cancelar" >--Cancelar</button></a>
    </div>
        <form action="UsuarioControle.php" style="grid-area: excluir; display: flex;" method="post">
            <!-- Manda o id para o DAO excluir um registro -->
            <input type="number" name="id" value="<?php echo $_REQUEST['id']?>" hidden>
            <input style="flex-grow: 2;" id="<?php echo $hideExcluir; ?>" type="submit" value="Excluir">
        </form>
        <form id="cadastrarU" style="grid-area: list;" action="EditarControle.php" method="post">
            <h3 id="txtC" style="grid-area: Nome;">Nome</h3>
            <h3 id="txtC" style="grid-area: Data;">Data De Nacimanto</h3>
            <h3 id="txtC" style="grid-area: Email;">Email</h3>
            <h3 id="txtC" style="grid-area: Tele;">Telefone</h3>
            <!-- Formulário -->
            <input type="text" name="nome" id="nome" style="grid-area: NomeF;" value="<?php echo $usuario['nome'];?>">
            <input type="text" name="data" id="data" style="grid-area: DataF;" value="<?php echo $usuario['dataNasc'];?>"> 
            <input type="email" name="email" id="email" style="grid-area: EmailF;" value="<?php echo $usuario['email'];?>">
            <input type="number" name="telefone" id="telefone" style="grid-area: TeleF;" value="<?php echo $usuario['telefone'];?>">
            <!-- Para o DAO saber qual o tipo de operação e qual registro alterar -->
            <input type="text" name="tipo" value="<?php echo $_REQUEST['tipo']?>" hidden>
            <input type="number" name="id" value="<?php echo $_REQUEST['id']?>" hidden>
            <div style="grid-area: botoes;" id="botoes">
                <input style="flex-grow: 1;" id="CadastrarButton"  type="submit" value="Salvar">
            </div>
        </form>
    
</body>
</html>