<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3</title>
</head>
<body>
    <form action="tallerPunto3.php" method="post">
        <label >Intensidad</label>
        <input type="text" name="intensidad">
        <label for="">Resistencia</label>
        <input type="text" name="resistencia">
        <input type="submit" value="enviar">
    </form>

    <br>

    <form action="tallerPunto4.php">
    <input type="submit" value="Punto 4">
    </form>
</body>
</html>
<?php 

    $intensidad = $_POST["intensidad"];
    $resistencia = $_POST["resistencia"];

    $voltaje = $intensidad*$resistencia;

    if($_POST){
        echo "El voltaje es: {$voltaje}";
    }
    
?>

