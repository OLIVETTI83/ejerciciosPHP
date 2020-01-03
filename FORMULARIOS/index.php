<?php

if($_POST){
    echo $_POST['nombre'];
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<br><br>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"> 
        <input type="text" placeholder="Nombre" name="nombre">
        <br><br>
        <label for="hombre"> Hombre </label>
        <input type="radio" name="sexo" value="hombre" id="hombre">

        <label for="mujer"> Mujer </label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br><br>

        <input type="submit" value="Enviar">


    </form>
</body>
</html>