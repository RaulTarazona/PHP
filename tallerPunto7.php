<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 7</title>
</head>
<body>
    <form action="tallerPunto7.php" method="post">
        <label >Producto</label>
        <input type="text" name="producto">
        <label for="">Precio</label>
        <input type="text" name="precio">
        <label for="">Cantidad</label>
        <input type="text" name="cantidad">
        <input type="submit" value="enviar">
    </form>

    <br>
    <form action="tallerPunto8.php">
    <input type="submit" value="Punto 8">
    </form>
</body>
</html>
<?php 
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    if($_POST){
        $total = $precio * $cantidad;

        echo "<h2>Factura</h2>";
        echo "Producto: {$producto}";
        echo "<br>Precio: {$precio}";
        echo "<br>Cantidad: {$cantidad}";
        echo "<br>Total a pagar: {$total}";
    }

?>