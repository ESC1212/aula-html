<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            border: 1px solid purple;
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
    <?php
    include_once("db.php");
    include_once("pessoa_da.php");

    $listaPessoa = getUsuarios();
    
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        for($i=0; $i <count($listaPessoa); $i++){
            ?>
            <tr>
                <td><a href="edit_pessoa.php/?pessoa_id= <?php echo $listaPessoa[$i]["idusuario"] ?>"><?php echo $listaPessoa[$i]["idusuario"] ?></a></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["email"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>