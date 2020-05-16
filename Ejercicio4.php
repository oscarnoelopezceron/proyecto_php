<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method ="post">
        <label for="txtRadio">Digite el radio del circulo: </label>
        <input type="text" name="txtRadio" id="txtRadio" required>

        <br><br>



        <input type="submit" value="Enter">

      <hr>
    
    </form>

    <?php
        if (isset($_POST["txtRadio"])) {

         $Radio = pi() * $_POST["txtRadio"];
         $Total = pow($Radio,2);
        // $Total = $Radio * $Radio;

        echo "El Area $Total";
    }
    ?> 
</body>
</html>