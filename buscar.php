<?php
include("./database.php");

if(isset($_POST['texto_busqueda'])) {
    $texto_busqueda = $_POST['texto_busqueda'];

    $sentenciaSQL = $conexion->prepare("SELECT * FROM noticias WHERE TITULO LIKE :texto");
    $sentenciaSQL->bindValue(':texto', '%' . $texto_busqueda . '%', PDO::PARAM_STR);
    $sentenciaSQL->execute();
    $resultados = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultados);
}
?>