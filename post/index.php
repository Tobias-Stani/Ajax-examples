<?php
// Define tu array de datos
$datos = array('dato1' => 'valor1', 'dato2' => 'valor2', 'dato3' => 'valor3');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <form action="imprimir.php" method="post">
        <!-- Agrega campos ocultos para pasar los datos -->
        <?php foreach ($datos as $clave => $valor): ?>
            <input type="hidden" name="<?php echo $clave; ?>" value="<?php echo $valor; ?>">
        <?php endforeach; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
