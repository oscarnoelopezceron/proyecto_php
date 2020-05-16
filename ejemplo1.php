<?php
    $mensaje = "";
    $tipo="";
    #comprobar si se envió la compra
    if (isset($_GET["txtCompra"])) {
        # comprobar el tipo
        $compra = $_GET["txtCompra"];
        if ($compra > 1000) {
            # asignar el tipo
            $tipo = "VIP";
        }elseif ($compra >= 200 && $compra <= 1000) {
            # asignar el tipo
            $tipo = "Frecuente";
        }elseif ($compra >= 0 && $compra <200) {
            # asignar el tipo
            $tipo = "Normal";
        }else {
            # code...
            $tipo = "No está en el rango";
        }

        $mensaje ="<script>alert('El cliente es:\\n$tipo');</script>";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 2</title>
</head>
<body>
    <h2>Determinar si el cliente es VIP, Frecuente o Normal. Si su compra es mayor a 1000, entre 200 y 1000 o menor a 200 respectivamente</h2>
    <hr>
    <form action="" method="get">
        <label for="txtCompra">Escriba su Compra: </label>
        <input type="text" name="txtCompra" id="txtCompra" required>
        <input type="submit" value="Calcular">
    </form>
    <hr>
    <?php
        echo $mensaje;
    ?>
    
</body>
</html>