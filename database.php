<?php 
$host="localhost";
$bd="noticias";
$usuario="root";
$contrasenia="";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    
} catch ( Exception $ex) 
{
    echo $ex->getMessage();
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM noticias");
$sentenciaSQL->execute();
$listaNoticias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>