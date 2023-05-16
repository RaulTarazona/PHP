<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>
    <form action="tallePunto1.php" method="post">
    <label >Nota1</label>
    <input type="text" name="nota1">
    <label for="">Nota2</label>
    <input type="text" name="nota2">
    <label for="">Nota3</label>
    <input type="text" name="nota3">
    <input type="submit" value="enviar">
    </form>
<br>
    <form action="tallerPunto2.php">
    <input type="submit" value="Punto 2">
    </form>
    

</body>
</html>

<?php 
    $nota_1 = "{$_POST["nota1"]}";
    $nota_2 = "{$_POST["nota2"]}";
    $nota_3 = "{$_POST["nota3"]}";

    $definitiva = ($nota_1 + $nota_2 + $nota_3)/3;

    echo "<br>La Primera nota es: {$nota_1}";
    echo "<br>La Segunda nota es: {$nota_2}";
    echo "<br>La Tercera nota es: {$nota_3}";

    echo "<br>La Definitiva es: {$definitiva}";


    if($definitiva >= 3.9){
        echo "<br>Becado";
    }else{
        echo "<br>Estudie";
    }
?>