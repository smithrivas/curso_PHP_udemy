<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="wrap">
      <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre:" id="nombre" class="form-control" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
        <input type="text" name="correo" placeholder="Correo:" id="correo" class="form-control" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
        <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
      <?php if(!empty($errores)): ?>
        <div class="alert error">
          <?php echo $errores; ?>
        </div>
      <?php elseif($enviado): ?>
        <div class="alert success">
          <p>Enviado correctamente.</p>
        </div>
      <?php endif ?>
        <br/><input type="submit" name="submit" value="Enviar correo" class="btn btn-primary">
      </form>
    </div>
  </body>
</html>
