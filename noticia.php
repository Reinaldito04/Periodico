<?php
// Incluir el archivo que contiene el código para conectarse a la base de datos
include 'database.php';

// Recuperar el ID de la noticia desde la URL o el formulario
$noticia_id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : null);

// Función para obtener los datos de la siguiente noticia
function obtenerSiguienteNoticia($conexion, $noticia_id) {
    $sql = "SELECT id, titulo, contenido, imagenes ,imagen2, imagen3 FROM noticias WHERE id > :id ORDER BY id ASC LIMIT 1";
    $stmt = $conexion->prepare($sql);
    $stmt->bindValue(':id', $noticia_id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Obtener los datos de la noticia actual
if ($noticia_id) {
    $sql = "SELECT titulo, contenido, imagenes ,imagen2, imagen3 FROM noticias WHERE id = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindValue(':id', $noticia_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($result) && $result) {
    // Mostrar información de la noticia actual
    $titulo = $result["titulo"];
    $contenido = $result["contenido"];
    $longitud = strlen($contenido);
    $mitad = $longitud / 2;
    $parte1 = substr($contenido,0,$mitad);
    $parte2 =substr($contenido,$mitad);
    $imagenes = $result["imagenes"];
    $imagen2= $result["imagen2"];
    $imagen3= $result["imagen3"];

    // Obtener los datos de la siguiente noticia
    $siguienteNoticia = obtenerSiguienteNoticia($conexion, $noticia_id);
} else {
    echo "<h1 class='alert alert-danger'>No se encontró la noticia</h1>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./imagenes/logo.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body class="hidden">
    <div class="d-flex justify-content-center carga" id="carga">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only"></span>
        </div>
    </div>
    <style>
    #carga {
        height: 100vh;
        background-color: #0000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hidden {
        overflow: hidden !important;
    }
    </style>
    <header>

        <nav class="navbar navbar-expand-lg bg-primary navbar-dark navbar-fondo " id="nav"
            style="padding:2px !important">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button id="myBtn" class="btn logo "><a class="navbar-brand texto">
                        <img src="./imagenes/logo-partefinal.png" alt="logo"
                            class="d-inline-block logoNav align-text-top logo">

                    </a>
                </button>


                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                    <ul class="navbar-nav navbar me-auto  m- links justify-content-between">
                        <li class="nav-item texto links">
                            <a class="nav-link texto active links" aria-current="page" href="./index.php">Inicio </a>
                        </li>
                        <li class="nav-item texto links">
                            <a class="nav-link  texto active links" aria-current="page"
                                href="informacion.php">Información</a>
                        </li>
                        <li class="nav-item texto links">
                            <a class="nav-link texto active links" aria-current="page" href="./vision.php">Misión y
                                Visión </a>
                        </li>




                    </ul>
                    <ul class="navbar-nav ms-auto navbar mb-2 mb-lg-0">

                        <li class="nav-item  texto links ">
                            <button class="btn ">
                                <a class="nav-link texto active links " href="./login.php">Iniciar Sesion</a>
                            </button>


                        </li>

                    </ul>


                </div>
            </div>
        </nav>

        </nav>



    </header>


    <style>
    .navbar-fondo {
        background-color: rgba(21, 44, 96, 1) !important;

    }

    body {
        background: url("./imagenes/background.png");
        background-repeat: no-repeat;
        background-size: cover;

    }

    @media only screen and (min-width: 300px) and (max-width: 768px) {

        body {
            background: url("./imagenes/background-movil.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

    }

    .texto {
        color: white !important;
        font-size: 20px;
        color: rgb(246, 251, 71) !important;
    }

    .texto:hover {
        color: white !important;
    }

    .logoNav {
        height: 70px;

    }

    .navbar {



        margin: 0 auto !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        font-weight: bold !important;
    }

    .navbar .logo {
        font-size: 1.5rem !important;
        font-weight: bold !important;
    }

    .navbar .links {
        display: flex !important;
        gap: 2rem !important;
    }

    @media only screen and (min-width: 300px) and (max-width: 768px) {
        .logoNav {
            height: 40px;
        }
    }
    </style>

    <style>
    .navbar-fondo {
        background-color: rgba(21, 44, 96, 1) !important;
    }

    .texto:hover {
        color: yellow !important;
    }
    </style>

    <div class="container contenedor-noticia" >
        <div class="container-fluid p-6 mx-auto" id="noticia-container">
            <div class="imagen-noticia">
                <img id="Noticia" class="img-fluid mt-2  " src="./imagenes/<?php echo $imagenes; ?>">
            </div>

            <h2 class="text-center fs-1 fw-bold text-capitalize py-2 parrafo"><?php echo $titulo; ?></h2>






            <?php if (isset($imagen2)) : ?>
            <p class="fs-3 lh-base text-center contenido parrafo contenido-noticia"><?php echo $parte1; ?></p>
            <div class="imagen-noticia">
                <img id="Noticia2" class="img-fluid mt-2 pb-2 " src="./imagenes/<?php echo $imagen2; ?>">
            </div>

            <p class="fs-3 text-center text-center parrafo contenido-noticia"><?php echo $parte2; ?></p>
            <?php else: ?>
            <?php if (isset($imagenes)) :?>
            <p class="fs-3 lh-base text-center contenido parrafo contenido-noticia"><?php echo $contenido; ?></p>
            <?php endif;?>
            <?php endif; ?>


            <?php if (isset($imagen3)) : ?>
            <div class="imagen-noticia">
                <img id="Noticia3" class="img-fluid mt-2 pb-2 " src="./imagenes/<?php echo $imagen3; ?>">
            </div>


            <?php endif; ?>
        </div>
    </div>

    <style>
        .contenedor-noticia{
            padding-top: 20px;
            background-color: white;
            border-radius: 25px;
        }
    @media only screen and (min-width: 1024px) {
        .imagen-noticia {
            padding-left: 150px;
            padding-right: 150px;
        }

    }
    </style>
    <div class="container-fluid d-flex justify-content-between align-items-center pt-5">
        <button type="button" class="btn btn-primary rounded-pill btn-lg">
            <a href="index.php" class="btn btn-primary text-uppercase text-decoration-none font-monospace">Volver al
                Inicio</a>
        </button>
        <div class="boton siguiente">
            <?php if (isset($siguienteNoticia) && $siguienteNoticia) { ?>
            <button class="btn btn-primary rounded-pill btn-lg" id="boton">
                <a href="noticia.php?id=<?php echo $siguienteNoticia['id']; ?>"
                    class="btn btn-primary text-uppercase text-decoration-none font-monospace">Siguiente</a>
            </button>
            <input type="hidden" id="siguienteNoticiaId" value="<?php echo $siguienteNoticia['id']; ?>">
            <?php } ?>
        </div>
    </div>


    <style>
    #noticia-container {
        margin-top: 65px;
    }

    #Noticia,
    #Noticia2,
    #Noticia3 {
        padding-top: 10px;
        width: 100%;
        height: 550px;
        object-fit: cover;
        border-radius: 35px;

    }

    @media only screen and (min-width: 300px) and (max-width: 768px) {

        #Noticia,
        #Noticia2,
        #Noticia3 {
            height: 100%;
        }
    }

    

    .parrafo {
        color: black !important;
        text-shadow: 1px 1px 1px  white;
        
    }
    .contenido-noticia{
        
        text-align: justify !important;
         
    }
    </style>




    <footer class="background bg-alert  text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <p class="fw-bolder texto-footer">U.E JUAN CRISÓSTOMO FALCÓN</p>

                <p class=" bw-bolder texto-footer">
                    Educación Inicial y Primaria Liceo de Tecnología: Informática, Hidrocarburos, Electrónica,
                    Electricidad, Instrumentación, Refrigeración y Ciencias.
                </p>
                <div class="row text-center d-flex justify-content-center">
                    <h2 class="ps-3 mx-auto p-2 texto-footer fs-3">UBICACIÓN</h2>
                    <div class="container mapa">


                        <iframe class="mapa-ubicacion"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7854.365093216675!2d-64.68794473906661!3d10.165812566522215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2d731057f28775%3A0x9862c875b567bb79!2sUnidad%20Educativa%20Industrial%20Juan%20Cristostomo%20Falcon!5e0!3m2!1ses!2sve!4v1684422921113!5m2!1ses!2sve"
                            width="550" height="300" style="border-radius:25px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" zoom="14"></iframe>



                    </div>
            </section>


        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright

        </div>
        <!-- Copyright -->
    </footer>
    <style>
    .mapa {
        overflow: hidden;
    }


    .mapa-ubicacion {
        max-width: 50%;

        max-height: 30vh;

    }

    footer {
        margin-top: 50px;
        margin-bottom: 0 !important;
    }

    .background {
        background-color: rgb(246, 251, 71);

    }

    .texto-footer {
        font-size: large;
        text-align: center;
        color: rgb(21, 44, 96);


    }
    </style>
    <style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fff;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
        position: relative;
    }

    .close {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 28px;
        font-weight: bold;
        color: #aaa;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
    <script>
    // Obtener los elementos de los modales
    var modal1 = document.getElementById("myModal1");


    // Obtener los botones para abrir los modales
    var btn1 = document.getElementById("myBtn");


    // Obtener el elemento <span> que cierra cada modal
    var span1 = document.getElementsByClassName("close")[0];

    let cerrar = document.getElementById("cerrar");


    // Función para abrir Modal 1
    btn1.onclick = function() {
        modal1.style.display = "block";

    }



    // Función para cerrar Modal 1
    span1.onclick = function() {
        modal1.style.display = "none";

    }


    cerrar.onclick = function() {
        modal1.style.display = "none";
        titulo.style.display = "block";
    }

    // Función para cerrar los modales cuando se hace clic fuera del contenido
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
            titulo.style.display = "block";
        }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    window.onload = function() {
        $('#carga').fadeOut();
        $('body').removeClass('hidden');
        $('#carga').remove();
        $('#nav').addClass('fixed-top');

    }
    </script>
    <script>
    //         $(document).ready(function() {
    //   // Manejar el evento click del botón "Siguiente"
    //   $('#boton').click(function(e) {
    //     e.preventDefault();
    //     var siguienteNoticiaId = $('#siguienteNoticiaId').val();

    //     // Realizar la solicitud Ajax para obtener los datos de la siguiente noticia
    //     $.ajax({
    //       url: 'obtener_siguiente_noticia.php',
    //       type: 'POST',
    //       data: { id: siguienteNoticiaId },
    //       dataType: 'json',
    //       success: function(response) {
    //         // Actualizar los datos de la noticia en el formulario
    //         $('#Noticia').attr('src', './imagenes/' + response.imagenes);
    //         $('.fw-bold.text-capitalize.py-2').text(response.titulo);
    //         $('.fs-5.lh-base.text-center').text(response.contenido);
    //         $('#Noticia2').attr('src','./imagenes' + response.imagen2);
    //         $('#Noticia3').attr('src','./imagenes' + response.imagen3);

    //         // Actualizar el valor del campo oculto "siguienteNoticiaId"
    //         $('#siguienteNoticiaId').val(response.id);

    //         // Desplazarse al principio del contenedor de la noticia
    //         var container = $('#noticia-container');
    //         var containerTop = container.offset().top;
    //         $('html, body').animate({ scrollTop: containerTop }, 'slow');
    //       },
    //       error: function() {
    //         alert('Error al obtener la siguiente noticia');
    //       }
    //     });
    //   });
    // });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>