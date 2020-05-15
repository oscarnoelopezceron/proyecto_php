<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Crear un script que muestre un listado de  5 países mínimo, y que al seleccionar un país muestre en pantalla el Nombre del país, idioma, moneda y continente al que pertenece.</p>

<form action="ejercicio2.php" method= "post">

<select name="txtpais" method= "post">


<option value="1">El Salvador</option>

<option value="2">Nicaragua</option>

<option valule="3">Panamá</option>

<option value="4">Costa Rica</option>

<option value="5">Honduras</option>

<input type="submit" value = "Enter">

</form>

    

<?php
    if (isset($_POST["txtpais"])) {

    $pais = $_POST["txtpais"];

            if ($pais == '1'){

                echo "Nombre: El Salvador <br> 
                Idioma: Español <br>
                Moneda: Dolar Estadounidense <br>
                Continente : Americano";
            }
            else if ($pais == '2'){

                echo "Nombre:Nicaragua <br> 
                Idioma: Español <br>
                Moneda: Córdoba <br>
                Continente : Americano";
            }
            else if ($pais == '3'){

                echo "Nombre: Panamá <br> 
                Idioma: Español <br>
                Moneda: Balboa <br>
                Continente : Americano";
            }

            else if ($pais == '4'){

                echo "Nombre: Costa Rica <br> 
                Idioma: Español <br>
                Moneda: Colón Costarricense <br>
                Continente : Americano";
            }

            else{

                echo "Nombre: Honduras <br> 
                Idioma: Español <br>
                Moneda: Lempira <br>
                Continente : Americano";
            }

    }

?>
    
</body>
</html>