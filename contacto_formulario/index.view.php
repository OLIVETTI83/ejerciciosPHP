<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario Contacto</title>
  <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
        <input type="text" class="form-control" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($coreo)) echo $correo ?>">

        <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>


        <?php if (!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
        <?php elseif($enviado): ?>
        <div class="alert success">
                <p> Enviado correctamente </p> 
            </div>
        <?php endif  ?>       

        <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">

</body>
</html>