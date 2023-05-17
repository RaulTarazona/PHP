<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
</head>
<body>
<form action="tallerPunto5.php" method="post">
        <label >Primer numero</label>
        <input type="text" name="numero1">
        <label for="">Segundo Numero</label>
        <input type="text" name="numero2">
        <input type="submit" value="enviar">
    </form>

    <br>
    <form action="tallerPunto6.php">
    <input type="submit" value="Punto 6">
    </form>

</body>
</html>
<?php 
    if($_POST){
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if($numero1>=$numero2){
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;

            echo "La suma de los numeros es: {$suma} ";
            echo "<br>La Resta de los numeros es: {$resta} ";
        }
        if($numero2 >= $numero1){
            $division = $numero2 / $numero1;
            $producto = $numero2 % $numero1;

            echo "<br>La division de los numeros es: {$division} ";
            echo "<br>El producto de los numeros es: {$producto} ";
        }
    }
    
?>