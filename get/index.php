<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>AJAX con PHP y datos</title>
  
  <!-- Incluir jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>

<!-- Supongamos que tienes una variable en PHP llamada $datos -->
<?php
    $datos = array('dato1' => 'valor1', 'dato2' => 'valor2', 'dato3' => 'valor3');
?>

<button onclick="realizarSolicitud()">Hacer solicitud AJAX</button>

<div id="resultado"></div>


<script>

    function realizarSolicitud() {
        // Obtener la variable PHP y convertirla a formato JSON
        var datosPHP = <?php echo json_encode($datos); ?>;
        
        // Utilizar jQuery para realizar la solicitud AJAX con método GET
        $.ajax({
            type: "GET",
            url: "imprimir.php",
            data: { datos: JSON.stringify(datosPHP) },
            success: function(response) {
                // Manejar la respuesta del servidor
                console.log(response);
                $("#resultado").html(response);
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud AJAX:", status, error);
            }
        });
    }


</script>

</body>
</html>
