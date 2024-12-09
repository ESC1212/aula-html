<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            include_once("db.php");
            include_once("pessoa_da.php");

            $lista_pessoa= getUsuarios();
        ?>
    </pre>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

    <?php
        for ($i = 0; $i < count(value: $lista_pessoa); $i++){
    ?>
            <tr>
                <td><?php echo $lista_pessoa[$i]["idusuario"]?></td>
                <td><?php echo $lista_pessoa[$i]["nome"]?></td>
                <td><?php echo $lista_pessoa[$i]["email"]?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>