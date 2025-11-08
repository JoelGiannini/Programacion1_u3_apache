<?php

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener datos del formulario
    $nombre_apellido = trim($_POST["nombre_apellido"]);
    $email = trim($_POST["email"]);
    $consulta = trim($_POST["consulta"]);

    if ($nombre_apellido !== "" && $email !== "" && $consulta !== "") {
        // Separar nombre y apellido para formar el nombre del archivo
        $partes = explode(" ", $nombre_apellido);
        $apellido = strtolower(array_pop($partes)); // último valor
        $nombre = strtolower(implode("-", $partes)); // el resto

        // Si no hay nombre o apellido, usar nombre-apellido genérico
        if ($apellido === "" || $nombre === "") {
            $archivo = "consulta-anonima.txt";
        } else {
            $archivo = "$apellido-$nombre.txt";
        }

        // Guardar en carpeta "consultas"
        $directorio = __DIR__ . "/consultas";
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777, true);
        }

        // Armar texto a guardar
        $texto = "----------------------------------\n";
        $texto .= "Fecha: " . date("Y-m-d H:i:s") . "\n";
        $texto .= "Nombre y Apellido: $nombre_apellido\n";
        $texto .= "Email: $email\n";
        $texto .= "Consulta:\n$consulta\n\n";

        // Guardar (append si existe)
        file_put_contents("$directorio/$archivo", $texto, FILE_APPEND);

        $mensaje = "Gracias por contactarte, $nombre_apellido. Tu consulta fue guardada correctamente.";
    } else {
        $mensaje = "Por favor completá todos los campos del formulario.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Contacto - Club Atlético Boca Juniors</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navegación -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">Club Atlético Boca Juniors</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <div class="container" style="margin-top: 80px;">
    <h2>Formulario de Contacto</h2>

    <?php if ($mensaje !== ""): ?>
      <div class="alert alert-info"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
      <div class="form-group">
        <label>Nombre y Apellido</label>
        <input type="text" name="nombre_apellido" class="form-control" required>
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Consulta</label>
        <textarea name="consulta" class="form-control" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>

