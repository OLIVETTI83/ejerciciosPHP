<?php
session_start();

if($_SESSION){
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola,  $nombre";
    print_r($_SESSION);
    
}else {
    echo "No has iniciado sesión";
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pagina 2</title>
</head>
<body>
        <h1>Hola, </h1><?php echo $_SESSION['nombre'];  ?>
        <a href="cerrar.php">Cerrar sesión</a>
        

</body>
</html>