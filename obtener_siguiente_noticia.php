<?php
// Incluir el archivo que contiene el código para conectarse a la base de datos
include 'database.php';

// Obtener el ID de la siguiente noticia desde el formulario
$siguiente_noticia_id = $_POST['id'];

// Obtener los datos de la siguiente noticia
$sql = "SELECT id, titulo, contenido, imagenes FROM noticias WHERE id > :id ORDER BY id ASC LIMIT 1";
$stmt = $conexion->prepare($sql);
$stmt->bindValue(':id', $siguiente_noticia_id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Si no se encontró una siguiente noticia, obtener la primera noticia en la tabla
if (!$result) {
    $sql = "SELECT id, titulo, contenido, imagenes FROM noticias ORDER BY id ASC LIMIT 1";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Devolver los datos de la siguiente noticia en formato JSON
header('Content-Type: application/json');
echo json_encode($result);
?>