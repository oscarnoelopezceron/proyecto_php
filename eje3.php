<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<form action="" method="post">
<label for="txtalt">Digite la altura</label>
<input type="text" name="txtalt" id="txtalt" require>


<br>
<label for="txtbase">Digite la base</label>
<input type="textbase" name="txtbase" id="txtbase" require>


<hr>
<input type="submit" value="Calcular">


</form>

<?php
 if (isset($_POST["txtalt"])) {


    $area= $_POST["txtbase"] * $_POST["txtalt"];

    $perimetro=( $_POST["txtbase"] + $_POST["txtalt"])*2;

    echo " El area es: $area <br> ";
   
    echo " El perimetro es: $perimetro";


}
?>
    
</body>
</html>