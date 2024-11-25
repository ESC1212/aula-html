<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 6</title>
</head>
<body>
<form action="" method="get">
        <label for="a">Num</label>
        <input id= "a"  name = "a" type="number"> <br>
        <input type="submit" value = "Check">
    </form>
    <?php
        if(!isset($_REQUEST["a"])){
            die();
        }
        $num1 = $_REQUEST["a"];
        if ($num1%2 == 0){
            echo"o número é par";
        } else {
            echo"o número é impar";
        }
    ?>
</body>
</html>