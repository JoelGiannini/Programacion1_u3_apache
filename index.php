<?php
// --- BLOQUE DE COOKIES (debe ir antes de cualquier HTML) ---
$club = "Club Atlético Boca Juniors";

if (isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie('visitas', $visitas, time() + 3600 * 24 * 30); // guarda por 30 días
    $mensaje = "Has visitado el sitio $visitas veces.";
} else {
    setcookie('visitas', 1, time() + 3600 * 24 * 30);
    $mensaje = "Bienvenidos al Sitio Oficial del $club";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Club Atlético Boca Juniors - Disciplinas</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/1-col-portfolio.css" rel="stylesheet">
</head>
<body>

  <!-- Navegación -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Club Atlético Boca Juniors</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Disciplinas</a></li>
          <li><a href="php/contacto.php">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Mensaje de bienvenida / contador de visitas -->
  <div class="container" style="margin-top: 80px;">
    <p class="text-center" style="font-weight:bold; font-size:18px; color:#003366;">
      <?php echo $mensaje; ?>
    </p>

    <!-- Contenido principal -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Disciplinas: <small>Club Atlético Boca Juniors</small>
        </h1>
      </div>
    </div>

    <!-- Fútbol -->
    <div class="row">
      <div class="col-md-7">
        <img class="img-responsive" src="images/slider-boca.webp" alt="Equipo de fútbol de Boca Juniors" width="700" height="300">
      </div>
      <div class="col-md-5">
        <h3>Fútbol</h3>
        <h4>La pasión azul y oro</h4>
        <p>El fútbol es el corazón del Club Atlético Boca Juniors. Fundado en 1905, el club se convirtió en uno de los más grandes del mundo gracias a su rica historia, su garra y el inigualable apoyo de su hinchada.</p>
        <a class="btn btn-primary" href="disciplina_futbol.html" target="_blank">
          Ver más <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>

    <hr>

    <!-- Básquet -->
    <div class="row">
      <div class="col-md-7">
        <img class="img-responsive" src="images/Se-lo-llevo-a-lo-Boca-Basquet.jpg" alt="Equipo de básquet de Boca Juniors" width="700" height="300">
      </div>
      <div class="col-md-5">
        <h3>Básquet</h3>
        <h4>Tradición y excelencia en la cancha</h4>
        <p>El básquet de Boca Juniors es una de las disciplinas más destacadas del club, con una trayectoria que combina historia, esfuerzo y pasión.</p>
        <a class="btn btn-primary" href="disciplina_basquet.html" target="_blank">
          Ver más <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>&copy; 2025 Club Atlético Boca Juniors - Todos los derechos reservados</p>
        </div>
      </div>
    </footer>

  </div>

  <!-- Scripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

