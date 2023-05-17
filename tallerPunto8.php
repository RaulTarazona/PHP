<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 8</title>
</head>
<body>
    <form action="tallerPunto8.php" method="post">
        <label for="lado">Lado del cuadrado:</label>
        <input type="text" name="lado" id="lado">
        <br>
        <label for="base">Base del rectángulo:</label>
        <input type="text" name="base" id="base">
        <br>
        <label for="altura">Altura del rectángulo:</label>
        <input type="text" name="altura" id="altura">
        <input type="submit" value="Enviar">
    </form>

    <br>
    <form action="tallerPunto9.php">
    <input type="submit" value="Punto 9">
    </form>

   
</body>
</html>

<?php




if($_POST){
    $lado = $_POST["lado"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $perimetroCuadrado = 4 * $lado;
    $areaRectangulo = $base * $altura;
    echo "El perímetro del cuadrado es:{$perimetroCuadrado}";
    echo "<br>El área del rectángulo es: {$areaRectangulo}";
}

?>