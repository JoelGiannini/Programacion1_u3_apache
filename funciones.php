<?php
function verificar_tipos($titulo, $descripcion, $duracion) {
    if (is_int($duracion)) {
        print("La variable 'duracion' es de tipo entero.\n");
    }
    if (is_string($titulo)) {
        echo "Título: $titulo\n";
    }
    if (is_string($descripcion)) {
        echo "Descripción: $descripcion\n";
    }
}
function dias_transcurridos($fecha) {
    $fecha_inicial = new DateTime($fecha);
    $hoy = new DateTime();
    $diferencia = $hoy->diff($fecha_inicial);
    return $diferencia->days;
}
function estacion($fecha) {
    $mes = date("n", strtotime($fecha));
    $dia = date("j", strtotime($fecha));

    if (($mes == 12 && $dia >= 21) || ($mes <= 3 && $mes != 3) || ($mes == 3 && $dia < 21)) {
        return "Verano";
    } elseif (($mes == 3 && $dia >= 21) || ($mes <= 6 && $mes != 6) || ($mes == 6 && $dia < 21)) {
        return "Otoño";
    } elseif (($mes == 6 && $dia >= 21) || ($mes <= 9 && $mes != 9) || ($mes == 9 && $dia < 21)) {
        return "Invierno";
    } else {
        return "Primavera";
    }
}
function contar_palabras($texto) {
    $palabras = explode(" ", $texto);
    return count($palabras);
}
function procesar_variables($variables) {
    foreach ($variables as $var) {
        $length = strlen($var);

        if ($length == 5) {
            echo strtoupper($var) . "\n";
        } elseif ($length == 6) {
            echo strtolower($var) . "\n";
        } elseif ($length == 7) {
            echo ucfirst(strtolower($var)) . "\n";
        } elseif ($length == 8) {
            echo lcfirst(strtoupper($var)) . "\n";
        } else {
            echo $var . "\n";
        }
    }
}
?>
