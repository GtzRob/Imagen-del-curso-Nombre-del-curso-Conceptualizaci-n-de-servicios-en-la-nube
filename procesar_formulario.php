<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $lugar = $_POST["lugar"];
    $mensaje = $_POST["mensaje"];
    $indicaciones = $_POST["indicaciones"];

    // Procesar la carga de imágenes
    $uploadsDirectory = "imagenes/"; // Directorio donde se guardarán las imágenes
    $fotografias = $_FILES["fotografias"];
    
    foreach ($fotografias["name"] as $key => $name) {
        $targetFile = $uploadsDirectory . basename($name);
        move_uploaded_file($fotografias["tmp_name"][$key], $targetFile);
    }
}
?>
