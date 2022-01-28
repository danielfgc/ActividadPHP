<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actividad getters y setters</h2>
    <?php
        require_once("./clases/productos.php");
        $producto = new Productos();
        $producto->setId(100);
        $producto->setNombre("Camisa");
        $producto->setUnidades(5);
        $producto->setPrecio(7.99);

        $ide = $producto->getId();
        $name = $producto->getNombre();
        $uni = $producto->getUnidades();
        $pre = $producto->getPrecio();

        echo "<p>".$ide."-".$name."-".$uni."-".$pre."</p>";
        $producto->setPrecio(7.95);
        $factura = $producto->factura();
        echo "<p> El importe de la factura es: ".$factura."</p>";
        
    ?>
</body>
</html>