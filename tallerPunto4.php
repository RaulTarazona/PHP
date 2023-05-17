<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>

    <form action="tallerPunto4.php" method="post">
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Edad</label>
        <input type="text" name="edad1">
        <br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Edad</label>
        <input type="text" name="edad2">
        <br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Edad</label>
        <input type="text" name="edad3">
        <input type="submit" value="enviar">
    </form>
    
    <br>
    <form action="tallerPunto5.php">
    <input type="submit" value="Punto 5">
    </form>
</body>
</html>

<?php 

if($_POST){
   $nombre1 = $_POST["nombre1"];
   $edad1 = $_POST["edad1"];

   $nombre2 = $_POST["nombre2"];
   $edad2 = $_POST["edad2"];

   $nombre3 = $_POST["nombre3"];
   $edad3 = $_POST["edad3"];

   if($edad1 > $edad2 &&  $edad1 > $edad3){
    echo "La Persona con mas edad es {$nombre1}";
   }
   if($edad2 > $edad1 &&  $edad2 > $edad3){
    echo "La Persona con mas edad es {$nombre2}";
   }
   if($edad3 > $edad1 &&  $edad3 > $edad1){
    echo "La Persona con mas edad es {$nombre3}";
   }
}


?>