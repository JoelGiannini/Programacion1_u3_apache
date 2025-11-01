<?php
include 'config.php';
include 'variables.php';
include 'funciones.php';

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Resultados PHP - Club Atlántico Boca Juniors</title>";
echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<h1>Resultados de PHP</h1>";

echo "<h3>1. Verificación de tipos:</h3>";
if (is_int($duracion)) {
    echo "<p>La variable 'duracion' es de tipo entero.</p>";
}
if (is_string($titulo)) {
    echo "<p><strong>Título:</strong> $titulo</p>";
}
if (is_string($descripcion)) {
    echo "<p><strong>Descripción:</strong> $descripcion</p>";
}

$var1 = "Neuquen";
$var2 = "Salta";
$var3 = "Mendoza";
$var4 = "Misiones";

$variables = [$var1, $var2, $var3, $var4];

echo "<h3>2. Provincias procesadas:</h3>";
echo "<ul>";
foreach ($variables as $var) {
    // Primera letra mayúscula, resto minúscula
    echo "<li>" . ucfirst(strtolower($var)) . "</li>";
}
echo "</ul>";

echo "<h3>3. Días transcurridos y estación:</h3>";
$fecha_ejemplo = "2025-01-01";
echo "<p>Días desde $fecha_ejemplo: " . dias_transcurridos($fecha_ejemplo) . "</p>";
echo "<p>Estación para hoy: " . estacion(date("Y-m-d")) . "</p>";

echo "<h3>4. Conteo de palabras:</h3>";
echo "<p>Cantidad de palabras en descripción: " . contar_palabras($descripcion) . "</p>";

echo "</div>"; // fin container
echo "</body>";
echo "</html>";
?>

