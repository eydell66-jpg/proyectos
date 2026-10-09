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

$plazasValidas = filter_var($numeroPlazas, FILTER_VALIDATE_INT, $opciones);

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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<?php if (!empty($errores)): ?>
    <h1>No hemos podido completar la reserva</h1>
    <ul>
        <?php foreach ($errores as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="cata.html">Volver al formulario</a></p>
<?php else: ?>
    <h1>¡Hecho, <?= htmlspecialchars($nombre) ?>!</h1>
    <p>Te hemos reservado <?= htmlspecialchars($plazasValidas) ?> plazas para la próxima cata.</p>
<?php endif; ?>

</body>
</html>
