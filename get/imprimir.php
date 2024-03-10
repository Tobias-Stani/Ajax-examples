<?php
// Obtener los datos del array en formato JSON desde la solicitud GET
//$datos_json = isset($_GET['datos']) ? $_GET['datos'] : '';

// Decodificar el JSON a un array
// $datos = json_decode($datos_json, true);

// // Verificar si la decodificación fue exitosa y si hay datos
// if (is_array($datos) && !empty($datos) && is_array($datos[0])) {
//     // Crear la tabla HTML
//     echo '<table border="1">';
    
//     // Encabezados de columna
//     echo '<tr>';
//     foreach (array_keys($datos[0]) as $columna) {
//         echo '<th>' . htmlspecialchars($columna) . '</th>';
//     }
//     echo '</tr>';
    
//     // Filas con datos
//     foreach ($datos as $fila) {
//         echo '<tr>';
//         foreach ($fila as $valor) {
//             // Asegurarse de que $valor sea un valor escalar antes de imprimirlo
//             echo '<td>' . htmlspecialchars(is_scalar($valor) ? $valor : '') . '</td>';
//         }
//         echo '</tr>';
//     }

//     echo '</table>';
// } else {
//     echo "Error: No hay datos para mostrar o la decodificación del JSON fue incorrecta.";
// }
?>

<?php
// Verificar si se están recibiendo datos mediante GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos del cuerpo de la solicitud GET
    $datos = isset($_GET['datos']) ? json_decode($_GET['datos'], true) : [];

    // Mostrar los datos recibidos
    echo '<pre>';
    print_r($datos);
    echo '</pre>';

    // Realizar acciones con los datos
    // ...

    // Enviar una respuesta de vuelta al cliente
    echo "¡Datos recibidos correctamente!";
} else {
    // Si no se recibieron datos, mostrar un mensaje de error
    echo "Error: No se recibieron datos mediante GET.";
}
?>
