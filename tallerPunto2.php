<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
</head>
<body>
<form action="tallerPunto2.php" method="post">
    <label >Ingrese un numero</label>
    <input type="text" name="numero">

    </form>

    <form action="tallerPunto3.php">
    <input type="submit" value="Punto 3">
    </form>
    

</body>
</html>

<?php 
    $par = $_POST["numero"]%2;

if($_POST){
    if($par == 0){
        echo "El numero es par";
    }else{
        echo "El numero es impar";
    }

    if($par >= 10){
        echo "El numero es mayor a 10";
    }else{
        echo "<br>El numero es menor a 10";
    }
}
    
?>