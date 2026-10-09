<?php

$errores = [];

$nombre = trim($_POST["nombre"] ?? "");
$numeroPlazas = $_POST["plazas"] ?? "";

if ($nombre === "") {
    $errores[] = "El nombre es obligatorio.";
}

$opciones = [
    'options' => [
        'min_range' => 1,
        'max_range' => 4,

    ]
];

$plazasValidas = filter_var($numeroPlazas, FILTER_VALIDARE_INT, $opciones);

if ($plazasValidas === false) {
    $errores[] = "El número de plazas debe ser un entero entre 1 y 4.";
}

if(!empty($errores)) {
    echo "<ul>";
    foreach ($errores as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }  
    echo "</ul>";
} else {
    echo "!Hecho, " . htmlspecialchars($nombre) . "! Te hemos reservado " . htmlspecialchars($plazasValidas) . "plazas para la próxima cata.";
    
}

