<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 6</title>
</head>
<body>
    <form action="tallerPunto6.php" method="post">
        <label >Nombre</label>
        <input type="text" name="nombre1">
        <label >Genero</label>
        <input type="text" name="genero1">
        <label >Nota1</label>
        <input type="text" name="nota1">
        <br>
        <label >Nombre</label>
        <input type="text" name="nombre2">
        <label >Genero</label>
        <input type="text" name="genero2">
        <label >Nota2</label>
        <input type="text" name="nota2">
        <br>
        <label >Nombre</label>
        <input type="text" name="nombre3">
        <label >Genero</label>
        <input type="text" name="genero3">
        <label >Nota3</label>
        <input type="text" name="nota3">
        <br>
        <input type="submit" value="enviar">
    </form>

    <br>
    <form action="tallerPunto7.php">
    <input type="submit" value="Punto 7">
    </form>
</body>
</html>



<?php
if ($_POST) {
    $nombre1 = $_POST["nombre1"];
    $genero1 = $_POST["genero1"];
    $nota1 = $_POST["nota1"];

    $nombre2 = $_POST["nombre2"];
    $genero2 = $_POST["genero2"];
    $nota2 = $_POST["nota2"];

    $nombre3 = $_POST["nombre3"];
    $genero3 = $_POST["genero3"];
    $nota3 = $_POST["nota3"];
  
    $hombres = 0;
    $mujeres = 0;

    // Contar hombres y mujeres
    if ($genero1 == "masculino") {
        $hombres++;
    } elseif ($genero1 == "femenino") {
        $mujeres++;
    }

    if ($genero2 == "masculino") {
        $hombres++;
    } elseif ($genero2 == "femenino") {
        $mujeres++;
    }

    if ($genero3 == "masculino") {
        $hombres++;
    } elseif ($genero3 == "femenino") {
        $mujeres++;
    }

    // Mayor nota
    if ($nota1 >= $nota2 && $nota1 >= $nota3){
        echo "<br>La nota más alta es: $nota1 y pertenece al estudiante: $nombre1";
    }
    if ($nota2 >= $nota1 && $nota2 >= $nota3){
        echo "<br>La nota más alta es: $nota2 y pertenece al estudiante: $nombre2";
    }
    if ($nota3 >= $nota1 && $nota3 >= $nota2){
        echo "<br>La nota más alta es: $nota3 y pertenece al estudiante: $nombre3";
    }

    // Mostrar cantidad de hombres y mujeres
    echo "<br>Cantidad de hombres: $hombres";
    echo "<br>Cantidad de mujeres: $mujeres";
    }

    ?>









