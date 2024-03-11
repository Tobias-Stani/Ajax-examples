<style>
    body{
        background-color: black;
        color:azure;
    }
</style>

<?php
// Verifica si se han enviado datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos del formulario
    $datos = $_POST;

    // Puedes utilizar la variable $datos aquí
    echo "Contenido de \$datos en imprimir.php: ";
    print_r($datos);

        // Mostrar los datos recibidos
        echo '<pre>';
        print_r($datos);
        echo '</pre>';

} else {
    echo "No se recibieron datos por POST en imprimir.php.";
}
?>
