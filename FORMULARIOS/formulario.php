<?php
if (isset($_POST['sumbmit'])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if(!empty($nombre)){
      // $nombre= trim($nombre); 
      // $nombre= htmlspecialchars($nombre);
      // $nombre= strimplashes($nombre);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      echo "Tu nombre es: $nombre <br />";
    }else{
      $errores = 'Por favor, agrega un nombre';
    }

    if(!empty($correo)) {
      
      filter_var($correo, FILTER_SANITIZE_EMAIL);
      if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $errores .='Por favor, ingresa un correo válido <br />' ;
      }
      echo "Tu correo es: $correo";
    } else {

      $errores .='Por favor agrega un correo';
    }

    
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>
</head>
<body>

<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type= "text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="E-mail">

    <?php if (!empty($errores)): ?>
    <div class="error"><?php echo $errores;?></div> 
    <?php endif; ?>

    
    <input type="submit" name="submit"> 

</form>

</body>
</html>