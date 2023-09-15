<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
    $txtID=(isset($_POST['txtId']))?$_POST['txtId']:"";
    $txtTitulo=(isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
    $txtResumen=(isset($_POST['txtResumen']))?$_POST['txtResumen']:"";

    $txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
    $txtImagen2=(isset($_FILES['txtImagen2']['name']))?$_FILES['txtImagen2']['name']:"";
    $txtImagen3=(isset($_FILES['txtImagen3']['name']))?$_FILES['txtImagen3']['name']:"";
    $txtContenido=(isset($_POST['txtContenido']))?$_POST['txtContenido']:"";
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";


    
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
    $sentenciaSQL = $conexion->prepare("ALTER TABLE noticias MODIFY COLUMN IMAGEN2 VARCHAR(255)");
    $sentenciaSQL->execute();
    $sentenciaSQL = $conexion->prepare("ALTER TABLE noticias MODIFY COLUMN IMAGEN3 VARCHAR(255)");
    $sentenciaSQL->execute();
    switch($accion){
        case "agregar":
            $sentenciaSQL = $conexion->prepare("INSERT INTO noticias (TITULO, RESUMEN, IMAGENES , CONTENIDO, IMAGEN2, IMAGEN3) VALUES (:titulo , :resumen, :imagenes , :contenido ,:imagen2,:imagen3);");
            $sentenciaSQL->bindParam(':titulo',$txtTitulo);
            $sentenciaSQL->bindParam(':resumen',$txtResumen);
            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        
            $tmpImagen= $_FILES["txtImagen"]["tmp_name"];
            if ($tmpImagen!=""){
                move_uploaded_file($tmpImagen,"./imagenes/".$nombreArchivo);
            }
            $sentenciaSQL->bindParam(':imagenes',$nombreArchivo);
        
            // Verifica si se ha enviado una imagen para $txtImagen2
            if (isset($_FILES['txtImagen2']['name']) && $_FILES['txtImagen2']['name'] != "") {
                $nombreArchivo2 = $fecha->getTimestamp()."_".$_FILES["txtImagen2"]["name"];
            
                $tmpImagen2 = $_FILES["txtImagen2"]["tmp_name"];
                if ($tmpImagen2 != ""){
                    move_uploaded_file($tmpImagen2,"./imagenes/".$nombreArchivo2);
                }
                $sentenciaSQL->bindParam(':imagen2',$nombreArchivo2);
            } else {
                $sentenciaSQL->bindValue(':imagen2', null, PDO::PARAM_NULL);
            }
            // Verifica si se ha enviado una imagen para $txtImagen3
            if (isset($_FILES['txtImagen3']['name']) && $_FILES['txtImagen3']['name'] != "") {
                $nombreArchivo3 = $fecha->getTimestamp()."_".$_FILES["txtImagen3"]["name"];
            
                $tmpImagen3 = $_FILES["txtImagen3"]["tmp_name"];
                if ($tmpImagen3 != ""){
                    move_uploaded_file($tmpImagen3,"./imagenes/".$nombreArchivo3);
                }
                $sentenciaSQL->bindParam(':imagen3',$nombreArchivo3);
            } else {
                $sentenciaSQL->bindValue(':imagen3', null, PDO::PARAM_NULL);
            }
        
            $sentenciaSQL->bindParam(':contenido',$txtContenido);
            $sentenciaSQL->execute();
        
        
            echo '<div class="alert alert-success alert-dismissible fade show fixed-bottom" role="alert">
            <i class="bi bi-check2 fs-5">Los datos se guardaron correctamente.</i>
        
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            
            header("Locaton:administracion.php");
        
            break;
            case "Borrar":
                $sentenciaSQL= $conexion->prepare("SELECT * FROM noticias WHERE ID= :id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                $noticias = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
            
                if(isset($noticias["IMAGENES"]) &&($noticias ["IMAGENES"]!="imagen.jpg") ){
                    if (file_exists("./imagenes/".$noticias["IMAGENES"])){
                        unlink("./imagenes/".$noticias["IMAGENES"]);
                    }
                }
                if(isset($noticias["IMAGEN2"]) &&($noticias ["IMAGEN2"]!="imagen.jpg") ){
                    if (file_exists("./imagenes/".$noticias["IMAGEN2"])){
                        unlink("./imagenes/".$noticias["IMAGEN2"]);
                    }
                }
                if(isset($noticias["IMAGEN3"]) &&($noticias ["IMAGEN3"]!="imagen.jpg") ){
                    if (file_exists("./imagenes/".$noticias["IMAGEN3"])){
                        unlink("./imagenes/".$noticias["IMAGEN3"]);
                    }
                }
            
                $sentenciaSQL = $conexion->prepare("DELETE FROM noticias WHERE ID =:id");
                $sentenciaSQL->bindParam(':id',$txtID);
                $sentenciaSQL->execute();
                
                echo '<div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                    <i class="bi bi-trash3 fs-5"> Los datos se eliminaron correctamente.</i>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            
                echo '<script>setTimeout(function(){ window.location.href = "administracion.php"; }, 2000);</script>';
            
                break;
            
    }
$sentenciaSQL = $conexion->prepare("SELECT * FROM noticias");
$sentenciaSQL->execute();
$listaNoticias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administracion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./imagenes/logo.webp">
</head>

<body>
    <header>


        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand texto" href="https://www.instagram.com/ueijuancfalcon/?hl=es">
                    <img src="./imagenes/logo.png" alt="logo" width="40" height="30"
                        class="d-inline-block  align-text-top logo">

                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand " href="administracion.php">Administracion</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./informacion.php">Informacion</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>

        </nav>
    </header>



    <div class="container-fluid p-3 text-center">
        <div class="list-group text-center">
            <a href="#" class="list-group-item list-group-item-action active text-center" aria-current="true">
                <div class="w-100 text-center">
                    <h5 class="mb-1 text-center text-capitalize">Menu para Ingresar los datos de las noticias</h5>

                </div>


        </div>
    </div>

    <div class="container  noticias">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-6">
                <div class="card text-center    ">

                    <div class="card-body">

                        <form method="POST" id="miFormulario" enctype="multipart/form-data">


                            <div class="form-group">
                                <label class="fs-5 p-2" for="txtId">Codigo</label>
                                <input type="text" class="form-control " required readonly name="txtId" id="txtId">

                                <label class="fs-5 p-2" for="txtTitulo">Titulo de la noticia</label>
                                <input type="text" required class="form-control" name="txtTitulo" id="txtTitulo">

                            </div>

                            <label class="fs-5 p-2" for="txtResumen">Resumen de la noticia</label>
                            <input type="text" required id="txtResumen" name="txtResumen" class="form-control">
                            <label class="fs-5 p-2" for="txtImagen">Imagenes</label>

                            <input type="file" required id="txtImagen" name="txtImagen" class="form-control">

                            <div class="alert alert-primary mt-3 ">
                                <p class="fs-5  mb-1 text-danger">Imagenes Opcionales</p>

                            </div>
                            <label class="fs-5 " for="txtImagen2">Imagenes 2</label>

                            <input type="file" name="txtImagen2" id="txtImagen2" class="form-control">

                            <label class="fs-5 p-2" for="txtImagen3">Imagenes 3</label>
                            <input type="file" class="form-control" id="txtImagen3" name="txtImagen3">

                            <label class="fs-5 p-2" for="txtContenido">Contenido</label>
                            <textarea class="form-control" required name="txtContenido" id="txtContenido"
                                rows="6"></textarea>

                            <button type="submit" name="accion" value="agregar" class="btn btn-primary m-2">Enviar
                            </button>
                            <button type="submit" name="accion" value="cancelar" class="btn btn-danger"
                                onclick="limpiar()">Cancelar</button>
                        </form>

                        <script>
                        function limpiar() {
                            document.getElementById("miFormulario").reset();
                        }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card text-center ">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo </th>
                                        <th scope="col">Titulo </th>
                                        <th scope="col">Resumen</th>
                                        <th scope="col">Imagenes</th>

                                        <th scope="col">Contenido</th>
                                        <th scope="col" >Imagen </th>
                                        <th scope="col">Imagen </th>
                                        <th scope="col">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($listaNoticias as $noticias){ ?>
                                    <tr class="">
                                        <td><?php echo $noticias['ID']; ?></td>
                                        <td><?php echo $noticias['TITULO']; ?></td>
                                        <td><?php echo $noticias['RESUMEN']; ?></td>

                                        <td>
                                            <img class="img-thumbnail rounded"
                                                src=" ./imagenes/<?php echo $noticias['IMAGENES']; ?>" width="50" alt=""
                                                srcset="">




                                        </td>

                                        <td> ******* </td>
                                        <td>
                                            <?php if ($noticias['IMAGEN2'] != NULL): ?>
                                            <img class="img-thumbnail rounded"
                                                src="./imagenes/<?php echo $noticias['IMAGEN2']; ?>" width="50" alt="">
                                            <?php endif; ?>





                                        </td>
                                        <td>
                                        <?php if ($noticias['IMAGEN3'] != NULL): ?>
                                            <img class="img-thumbnail rounded"
                                                src="./imagenes/<?php echo $noticias['IMAGEN3']; ?>" width="50" alt="">
                                            <?php endif; ?>




                                        </td>
                                        <td>

                                            <form method="POST">
                                                <input type="hidden" name="txtId"
                                                    value="<?php echo $noticias['ID']; ?>" />
                                                <input type="submit" name="accion" value="Borrar"
                                                    class="btn btn-danger" />
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>

           
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
            </script>
</body>

</html>