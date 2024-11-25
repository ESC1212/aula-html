<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 2</title>
</head>
<body>
    <form action="" method="get">
        <label for="a">Primeiro Nmero </label>
        <input id= "a"  name = "a" type="number"> <br>
        <label for="b">Segundo Numero</label>
        <input id= "b" name = "b" type="number"> <br>
        <input type="submit" value = "Soma">
    </form>
 <h1><?php
    if(!isset($_REQUEST["a"]) || !isset($_REQUEST["b"])){
        die();
    }
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $a+$b;
    echo $c;

 ?></h1> 

    
</body>
</html>