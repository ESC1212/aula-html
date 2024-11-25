<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
</head>
<body>
<form action="" method="get">
        <label for="a">Min</label>
        <input id= "a"  name = "a" type="number"> <br>
        <label for="b">Max</label>
        <input id= "b" name = "b" type="number"> <br>
        <input type="submit" value = "Random">
    </form>
    <?php
        function randomize(){
            $a = $_REQUEST["a"];
            $b = $_REQUEST["b"];   
            $random = rand($a, $b);
            echo $random;
        }
        randomize();
    ?>
</body>
</html>