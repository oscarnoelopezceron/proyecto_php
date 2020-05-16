<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method ="post">
        <label for="txtNota1">Nota 1: </label>
        <input type="text" name="txtNota1" id="txtNota1" required>

        <br><br>

        <label for="txtNota2">Nota 2: </label>
        <input type="text" name="txtNota2" id="txtNota2" required>

        <br><br>

        <label for="txtNota3">Nota 3: </label>
        <input type="text" name="txtNota3" id="txtNota3" required>

        <br><br>

        <label for="txtFinal">Examen final: </label>
        <input type="text" name="txtFinal" id="txtFinal" required>

        <br><br>
        <label for="txtTFinal">Trabajo Final: </label>
        <input type="text" name="txtTFinal" id="txtTFinal" required>

        <br><br>



        <input type="submit" value="Enter">

      <hr>
    
    </form>

    <?php
        if (isset($_POST["txtNota1"])) {

            $Nota1 = ($_POST["txtNota1"] + $_POST["txtNota2"] + $_POST["txtNota3"]) /3;
            $Nota = (($Nota1 * 55) / 100);

            $Examen = (($_POST["txtFinal"] * 30) / 100);

             $TrabajoFinal = (($_POST["txtTFinal"] * 15) / 100);

             $Total = $Nota + $Examen + $TrabajoFinal;


            echo "Su nota es de $Total";
           

    }
    ?> 
</body>
</html>