<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Periodico, JUAN CRISOSTOMO FALCON , U.E INDUSTRIAL, PERIODICO ESCOLAR VENEZOLANO , VENEZUELA ESCOLAR ,CONVENIO, NOTICIAS ESCOLARES, TRONCONAL ANZOATEGUI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./imagenes/logo.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/abibas" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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




    <div class="container-fluid hero col-12 col-md-12">
        <div class="m_hero " id="m_hero">
            <div class="imagen-logo  justify-content-center text-center">
                <img class="img-fluid" src="./imagenes/delagio-tiittle.png">
            </div>
        </div>

    </div>
    <style>
    hero-texto {
        font-family: 'AbibasMedium';
        font-weight: normal;
        font-style: italic;
    }

    .hero {
        height: auto !important;
        min-height: 50px;
        overflow-x: hidden;



        padding: 10vh 0 !important;


        background-color: rgb(21, 44, 96);
    }

    .titulo-hero {
        margin-top: 20px !important;
    }

    @media only screen and (min-width: 769px) {
        .imagenTitulo {
            height: 40px;
        }

        body {
            background: url("./imagenes/background.png");
            background-repeat: no-repeat;
            background-size: cover;

        }

    }

    @media only screen and (min-width: 300px) and (max-width: 750px) {
        body {
            background: url("./imagenes/background-movil.png");
            background-size: contain;
            background-size: cover;


        }
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
                <button id="myBtn" class="btn logo elemento-nav-imagen"><a class="navbar-brand texto">
                        <img src="./imagenes/logo-partefinal.png" alt="logo"
                            class="d-inline-block logoNav align-text-top logo">

                    </a>
                </button>


                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="container-nav-links ">
                        <ul
                            class="navbar-nav navbar  mx-auto justify-content-center align-content-center align-intem  links justify-content-between">
                            <li class="nav-item texto links elemento-nav">
                                <a class="nav-link texto active links" aria-current="page" href="./index.php"
                                    title="Haz click para regresar al inicio">Inicio </a>
                            </li>
                            <li class="nav-item texto links elemento-nav">
                                <a class="nav-link  texto active links" aria-current="page" href="informacion.php "
                                    title="Haz click para ver toda la información">Información</a>
                            </li>
                            <li class="nav-item texto links elemento-nav">
                                <a class="nav-link texto active links" aria-current="page"
                                    title="Haz click para ver nuestra Misión y Visión" href="./vision.php">Misión y
                                    Visión </a>
                            </li>




                        </ul>
                    </div>

                    <ul class="navbar-nav ms-auto navbar-login mb-2 mb-lg-0">

                        <li class="nav-item  texto links elemento-nav ">
                            <button class="btn ">
                                <a class="nav-link texto active links " href="./login.php"
                                    title="Haz click para ir al ingreso de sesión">Iniciar Sesion</a>
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
        box-shadow: 2px;
        box-shadow: -3px -3px 8px #131313;
    }

    .texto {
        color: white !important;
        font-size: 20px;
        color: rgb(246, 251, 71) !important;

    }

    .elemento-nav {
        transition: 0.6s;

    }

    .elemento-nav:hover {

        border-radius: 25px;
        border-color: rgb(21, 44, 96);
        transform: translateY(-15%);
        border-radius: 15px;
        border: 2px solid yellow;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.8);
    }

    .elemento-nav-imagen {
        transition: 0.8s;
    }

    .elemento-nav-imagen:hover {

        transform: translateY(-3%);
        border-color: rgb(246, 251, 71);
        border-radius: 15px;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.8);

    }

    .texto:hover {
        color: white !important;
    }

    .logoNav {
        height: 70px;

    }

    .navbar {



        margin: auto !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        font-weight: bold !important;
    }

    .navbar-login {
        justify-content: center;
        text-align: center;
        align-items: center;
    }

    .navbar .logo {
        font-size: 1.5rem !important;
        font-weight: bold !important;
    }

    .navbar .links {
        display: flex !important;
        gap: 2rem !important;

    }

    .container-nav-links {
        text-align: center !important;
        justify-content: center !important;
        align-items: center !important;
        display: flex;
        position: relative;
        margin: 0 auto;
        flex-direction: row;




    }

    @media only screen and (min-width: 300px) and (max-width: 768px) {
        .logoNav {
            height: 40px;
        }
    }

    @media only screen and (min-width: 1290x) and (max-width: 1300px) {
        .container-nav-links {
            margin-left: 10px;
            justify-content: center;
            text-align: center;

        }
    }

    @media only screen and (min-width: 1310px)  and (max-width: 1390px){
        .container-nav-links {
            margin-left: 15%;
            justify-content: center;
            text-align: center;

        }

        .resumen-texto {
            font-size: 20px;
        }

        .titulo-texto {
            font-size: 25px;
        }
    }
    @media only screen and (min-width: 1391px) {
        .container-nav-links {
            margin-left: 20%;
            justify-content: center;
            text-align: center;

        }

        .resumen-texto {
            font-size: 20px;
        }

        .titulo-texto {
            font-size: 25px;
        }
    }
    @media only screen and (min-width: 1500px){
        .container-nav-links{
            margin-left: 23%;
        }
    }
    @media only screen and (min-width: 1600px){
        .container-nav-links{
            margin-left: 25%;
        }
    }
    </style>


    <div>

    </div>



    <style>
    #titulo {
        position: fixed;
        padding: 0px;
        left: 0;
        right: 0;

        z-index: 999;

    }

    .noticiaImagen {

        max-width: 67% !important;
        margin: auto !important;
        display: block !important;
        object-fit: fill;
        border-radius: .5rem;


    }
    </style>


    <style>
    .titulo-periodico {
        color: rgb(21, 44, 96);

        text-align: center !important;
        justify-content: center !important;
        line-height: 35px;
    }

    .titulo {
        font-size: 15px;
    }
    </style>

    <!-- <div class="col-12 col-md-12 container    titulo carrusel">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner d-item">
                        <div class="carousel-item active d-item">
                            <img src="./imagenes/imagen1.jpg" class="d-img  imagen-carrusel" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-item">
                            <img src="./imagenes/copia-imagen2.jpg" class="img-fluid imagen-copia" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item d-item">
                            <img src="./imagenes/copia-imagen3.jpg" class="d-img imagen-carrusel" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>

                    <style>
                    .carousel-inner {
                        padding-top: 10px;
                        object-fit: cover;
                        max-width: 200vh;
                        max-height: 100%;

                        border-radius: 35px;
                        ;
                    }

                    .imagen-carrusel {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .imagen-copia {
                        width: 100%;
                        height: 800px;
                        object-fit: cover;

                    }

                    @media screen and (max-width: 768px) {

                        .imagen-copia {
                            height: 200px;
                            width: 100%;
                        }

                        .imagen-carrusel {
                            height: 200px;
                            width: 100%;


                        }
                    }
                    </style> -->

    </div>
    </div>

    </div>


    </div>
    <?php
include("./database.php");

if (isset($_POST['texto_busqueda'])) {
  $texto_busqueda = $_POST['texto_busqueda'];
  $sentenciaSQL = $conexion->prepare("SELECT * FROM noticias WHERE TITULO LIKE :texto_busqueda ORDER BY ID ASC ");
  $sentenciaSQL->bindValue(':texto_busqueda', '%' . $texto_busqueda . '%');
  $sentenciaSQL->execute();
  $listaNoticias = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
} else {
  $sentenciaSQL = $conexion->prepare("SELECT * FROM noticias");
  $sentenciaSQL->execute();
  $listaNoticias = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
}
?>

    <section class="my-5">
        <h2 class="text-center p-2  text-white">
            Últimas Noticias
        </h2>

        <div class="col-12 d-flex justify-content-end">
            <div class="input-group container">
                <input type="text" class="form-control busqueda rounded-pill" id="texto_busqueda"
                    placeholder="Buscar...">
                <button class="btn btn-link" id="btn_buscar" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <style>
        input::placeholder {

            text-align: center;
        }
        </style>



        <div class="container pt-2 noticias" id="resultado_busqueda">
            <div class="row">
                <?php
        $contador = 0;
        foreach ($listaNoticias as $noticia) {
            $estilo_actual = $contador % 2 == 0 ? "estilo1" : "estilo2";
            ?>
                <div class="col-md-6 col-12">
                    <div class="card mb-3 zoom <?php echo $estilo_actual; ?>">
                        <div class="row g-0">
                            <div class="col-md-4 order-md-<?php echo $estilo_actual == "estilo1" ? 0 : 1; ?>">
                                <img src="./imagenes/<?php echo $noticia['IMAGENES']; ?>" alt="Imagen"
                                    class="img-fluid rounded-start" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title titulo-texto text-center text-capitalize fw-bolder">
                                        <?php echo $noticia['TITULO']; ?>
                                    </h5>
                                    <p class="card-text resumen-texto text-center">
                                        <?php echo $noticia['RESUMEN'] ?>
                                    </p>
                                    <div class="justify-content-center text-center pt-auto">
                                        <!-- Button trigger modal -->
                                        <button type="button"
                                            class="btn btn-outline-primary justify-content-center text-center ">
                                            <a href="noticia.php?id=<?php echo $noticia['ID']; ?>"
                                                class=" text-black fw-bolder text-decoration-none ">Leer
                                                más...</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            $contador++;
        } ?>
            </div>
        </div>

        <style>
        .titulo-noticia {
            color: black;
        }

        @media screen and (max-width: 768px) {
            .resumen-texto {
                font-size: 1.6em;
            }

            .titulo-texto {
                font-size: 1.9em;
            }
        }
        </style>

        <div class="container">

            <div class="border-top border-bottom border-dark py-3 pt-4">
                <h2 class="text-center pb-2 border-bottom border-dark text-white">Curiosidades</h2>
                <div class="row pt-3">
                    <div class="col-md-4 mb-4 ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/bullyng.png" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5 text-center">El Acoso Escolar o Bullying</span>
                                <span class="card_subtitle1 fs-5">El acoso escolar o bullying es la exposición que sufre
                                    un niño ...</span>
                                <p class="card_description1"><a class="text-decoration-none" id="myBtn2">Haz click
                                        aqui</a> para leer más sobre el bullyng y sus efectos en los niños ,niñas y
                                    adolescentes</p>

                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-4  ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/agua.png" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5 text-center">¿Sabes cuánta agua consumes?</span>
                                <span class="card_subtitle1 fs-5">El agua es uno de los recursos vitales más importante
                                    del mundo....</span>
                                <p class="card_description1"><a class="text-decoration-none" id="myBtn3"> Haz click
                                        aqui</a> para saber más sobre el agua y sus usos en la vida diaria</p>

                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-4 ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/leopardo.png" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5">El animal más rapido</span>
                                <span class="card_subtitle1 fs-5">El animal terrestre más rápido es el guepardo
                                    (Acinonyx jubatus)...</span>
                                <p class="card_description1"><a class="text-decoration-none" id="myBtn4"> Haz click
                                        aqui</a> para saber más sobre el animal mas veloz del mundo y su información</p>

                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-4 ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/elefante.jpg" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5">La comunicacion del elefante</span>
                                <span class="card_subtitle1 fs-5">Los elefantes pueden comunicarse a largas distancias
                                    utilizando infrasonidos</p>
                                    <p class="card_description1"><a class="text-decoration-none" id="myBtn5"> Haz click
                                            aqui</a> para saber más sobre los elefantes</p>

                            </div>
                        </article>
                    </div>

                    <div class="col-md-4 mb-4 ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/piramide.jpg" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5">La Gran Pirámide de Guiza</span>
                                <span class="card_subtitle1 fs-5">Una de las Siete Maravillas del Mundo Antiguo, fue
                                    construida hace más de 4,500 años ...</span>
                                <p class="card_description1"><a class="text-decoration-none" id="myBtn6"> Haz click
                                        aqui</a> para saber más sobre la piramide de Guiza </p>

                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 mb-4 ">
                        <article class="card1">
                            <img class="card_image1" src="./imagenes/antartida.jpg" alt="Descripción de la imagen">
                            <div class="card_content1">

                                <span class="card_title1 fs-5">En la Antártida</span>
                                <span class="card_subtitle1 fs-5">Hay un subglacial que ha estado aislando del mundo por
                                    mas de 15 millones de año</span>
                                <p class="card_description1"><a class="text-decoration-none" id="myBtn7"> Haz click
                                        aqui</a> para saber más sobre este subglacial</p>

                            </div>
                        </article>
                    </div>
                </div>

            </div>
            <style>
            .curiosidades {
                border: 3px solid rgb(21, 44, 96) !important;
            }

            .curiosidades2 {
                border: 3px solid rgb(246, 251, 71) !important;
            }

            .curiosidades3 {
                border: 3px solid rgb(21, 44, 96) !important;
            }

            .card1 {
                margin-left: 25px;
                position: relative;
                width: 250px;
                height: 250px;
                color: #2e2d31;
                background: #131313;
                overflow: hidden;
                border-radius: 20px;
            }

            .card_image1 {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .card_title1 {
                font-weight: bold;
            }

            .card_content1 {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                padding: 20px;
                background: #f2f2f2;
                border-top-left-radius: 20px;
                transform: translateY(150px);
                transition: transform .25s;
            }

            .card_content1::before {
                content: '';
                position: absolute;
                top: -47px;
                right: -45px;
                width: 100px;
                height: 100px;
                transform: rotate(-175deg);
                border-radius: 50%;
                box-shadow: inset 48px 48px #f2f2f2;
            }

            .card_title1 {
                color: #131313;
                line-height: 15px;
            }

            .card_subtitle1 {
                display: block;
                font-size: 12px;
                margin-bottom: 10px;
            }

            .card_description1 {
                font-size: 14px;
                opacity: 0;
                transition: opacity .5s;
            }

            .card1:hover .card_content1 {
                transform: translateY(0);
            }

            .card1:hover .card_description1 {
                opacity: 1;
                transition-delay: .25s;
            }
            </style>


            <div id="myModal1" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center">U.E.I. JUAN CRISÓSTOMO FALCÓN</h5>

                        </div>
                        <img src="./imagenes/logo.webp" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            Educación Inicial y Primaria
                            Liceo de Tecnología: Informática, Hidrocarburos, Electrónica, Electricidad, Instrumentación,
                            Refrigeración y Ciencias.
                        </p>
                        <button id="cerrar" class="btn btn-primary">Cerrar</button>
                    </div>
                </div>
            </div>
            <div id="myModal2" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center">Acoso Escolar o Bullying</h5>

                        </div>
                        <img src="./imagenes/bullyng.png" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            El acoso escolar o bullying es la exposición que sufre un niño a daños
                            físicos y psicológicos de forma intencionada y reiterada por parte de otro, o de un grupo de
                            ellos,
                            cuando acude al colegio. El acosador aprovecha un desequilibrio de poder que existe entre él
                            y
                            su víctima
                            para conseguir un beneficio (material o no), mientras que el acosado se siente indefenso y
                            puede
                            desarrollar una serie
                            de trastornos psicológicos
                            que afectan directamente a su salud o incluso, en situaciones extremas, conductas
                            autodestructivas.
                        </p>
                        <p class="card-text fs-3 pt-2 text-center">
                            El bullying escolar se suele producir durante el recreo, en la fila para entrar a clase,
                            en los baños, los pasillos, los cambios de clase, al entrar y salir del centro, en el
                            transporte
                            escolar
                            o en el comedor. También puede ocurrir en el aula,
                            cuando el profesor está escribiendo en la pizarra o mientras está atendiendo a otros
                            alumnos.
                        </p>
                        <button id="cerrar2" class="btn btn-primary">Cerrar</button>

                    </div>
                </div>
            </div>
            <div id="myModal3" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center text-capitalize">¿Sabes cuánta agua consumes?</h5>

                        </div>
                        <img src="./imagenes/agua.png" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            El agua es uno de los recursos vitales para la vida, pues todas las actividades que
                            desarrollamos están relacionadas con este vital líquido.
                        </p>
                        <p class="card-text fs-3 pt-2 text-center">
                            Recordemos que el planeta Tierra está compuesto 70% por agua, y que sólo el 30% es tierra
                            firme.
                            En lo que al cuerpo humano se refiere, está compuesto 60% de agua, lo que le permite tener
                            un
                            correcto funcionamiento. De acuerdo a la Organización Mundial de la Salud (OMS), una persona
                            requiere de 100 litros de agua al día (5 o 6 cubetas grandes) para satisfacer sus
                            necesidades,
                            tanto de consumo como de higiene.
                        </p>
                        <button id="cerrar3" class="btn btn-primary">Cerrar</button>
                    </div>
                </div>
            </div>
            <div id="myModal4" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center text-capitalize">El animal terrestre más rápido</h5>

                        </div>
                        <img src="./imagenes/leopardo.png" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            El animal terrestre más rápido es el guepardo (Acinonyx jubatus). Este mamífero carnívoro,
                            también conocido como chita, alcanza una velocidad máxima de entorno los 130 kilómetros por
                            hora
                            y sigue siendo el felino más veloz de todos los que se conocen. Habita en las regiones de
                            África
                            y de Oriente Medio, donde sus presas tienen difícil la escapatoria </p>
                        <button id="cerrar4" class="btn btn-primary">Cerrar</button>

                    </div>
                </div>
            </div>
            <div id="myModal5" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center text-capitalize">La comunicación de los elefantes
                            </h5>

                        </div>
                        <img src="./imagenes/elefante.jpg" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            Los elefantes pueden comunicarse a largas distancias utilizando infrasonidos, que son
                            sonidos de baja frecuencia que no pueden ser detectados por el oído humano. Estos
                            infrasonidos pueden viajar hasta 6 millas (10 km) a través del aire y hasta 20 millas (32
                            km) a través del suelo. Los elefantes usan estos sonidos para comunicarse entre sí, incluso
                            a través de obstáculos como montañas y bosques. Además, se ha demostrado que los elefantes
                            pueden distinguir entre diferentes tipos de infrasonidos, lo que sugiere que pueden usar
                            estos sonidos para comunicar información específica, como la ubicación de fuentes de agua o
                            la presencia de depredadores.
                        </p>
                        <button id="cerrar5" class="btn btn-primary">Cerrar</button>

                    </div>
                </div>
            </div>
            <div id="myModal6" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center text-capitalize">La Gran Pirámide de Guiza</h5>

                        </div>
                        <img src="./imagenes/piramide.jpg" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            La Gran Pirámide de Guiza, una de las Siete Maravillas del Mundo Antiguo, fue construida
                            hace más de 4,500 años y es la estructura más antigua del mundo que todavía se mantiene en
                            pie. Los antiguos egipcios la construyeron como tumba para el faraón Khufu, y se necesitaron
                            alrededor de 20 años y más de 2 millones de bloques de piedra para completarla. La altura
                            original de la Gran Pirámide era de 146 metros, pero actualmente mide 138 metros debido a la
                            erosión. La Gran Pirámide es una obra de ingeniería impresionante y su construcción sigue
                            siendo un misterio para los arqueólogos y científicos modernos.
                        </p>
                        <button id="cerrar6" class="btn btn-primary">Cerrar</button>

                    </div>
                </div>
            </div>
            <div id="myModal7" class="modal">
                <div class="modal-content">
                    <span class="close"></span>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-1 text-center text-capitalize">En la Antártida, hay un lago
                                subglacial llamado lago Vostok</h5>

                        </div>
                        <img src="./imagenes/antartida.jpg" class="card-img-bottom img-fluid" alt="Camera" />
                        <p class="card-text fs-3 pt-2 text-center">
                            En la Antártida, hay un lago subglacial llamado lago Vostok que ha estado aislado del mundo
                            exterior durante más de 15 millones de años. Debido a que el lago está cubierto por más de 2
                            millas (3 km) de hielo, los científicos creen que podría haber formas de vida únicas que no
                            se han encontrado en ningún otro lugar del planeta. En 2012, los científicos lograron
                            perforar a través del hielo y tomar muestras del agua del lago para su análisis. El estudio
                            de estas muestras podría ayudar a los científicos a comprender cómo las formas de vida
                            pueden sobrevivir en ambientes extremos y podría tener importantes implicaciones para la
                            búsqueda de vida en otros planetas.
                        </p>
                        <button id="cerrar7" class="btn btn-primary">Cerrar</button>

                    </div>
                </div>
            </div>



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
            <footer class="background bg-alert container-fluid  text-center text-white">
                <!-- Grid container -->
                <div class="container-fluid p-4 pb-0">
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
                                    width="550" height="300" style="border-radius:25px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade" zoom="14"></iframe>



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

            /* Define la clase personalizada para el iframe */
            .mapa-ubicacion {
                max-width: 50%;
                /* Establece el ancho máximo en el 100% del contenedor principal */
                max-height: 30vh;
                /* Establece la altura máxima en el 50% de la altura visible de la pantalla */
            }

            footer {
                margin-top: 50px;
                margin-bottom: 0 !important;
                border-radius: 25px;
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
            <script>
            // Obtener los elementos de los modales
            var modal1 = document.getElementById("myModal1");
            var modal2 = document.getElementById("myModal2");
            var modal3 = document.getElementById("myModal3");
            var modal4 = document.getElementById("myModal4");
            let modal5 = document.getElementById("myModal5");
            let modal6 = document.getElementById("myModal6");
            let modal7 = document.getElementById("myModal7");
            let titulo = document.getElementById("titulo");
            // Obtener los botones para abrir los modales
            var btn1 = document.getElementById("myBtn");
            var btn2 = document.getElementById("myBtn2");
            var btn3 = document.getElementById("myBtn3");
            var btn4 = document.getElementById("myBtn4");
            let btn5 = document.getElementById("myBtn5");
            let btn6 = document.getElementById("myBtn6");
            let btn7 = document.getElementById("myBtn7");

            // Obtener el elemento <span> que cierra cada modal
            var span1 = document.getElementsByClassName("close")[0];
            var span2 = document.getElementsByClassName("close")[1];
            var span3 = document.getElementsByClassName("close")[2];
            var span4 = document.getElementsByClassName("close")[3];
            var span5 = document.getElementsByClassName("close")[4];
            var span6 = document.getElementsByClassName("close")[5];
            var span7 = document.getElementsByClassName("close")[6];
            let cerrar = document.getElementById("cerrar");
            let cerra2 = document.getElementById("cerrar2");
            let cerra3 = document.getElementById("cerrar3");
            let cerra4 = document.getElementById("cerrar4");
            let cerra5 = document.getElementById("cerrar5");
            let cerra6 = document.getElementById("cerrar6");
            let cerra7 = document.getElementById("cerrar7");

            // Función para abrir Modal 1
            btn1.onclick = function() {
                modal1.style.display = "block";
                titulo.style.display = "none";
            }

            // Función para abrir Modal 2
            btn2.onclick = function() {
                modal2.style.display = "block";
                titulo.style.display = "none";
            }

            // Función para abrir Modal 3
            btn3.onclick = function() {
                modal3.style.display = "block";
                titulo.style.display = "none";
            }
            btn4.onclick = function() {
                modal4.style.display = "block";
                titulo.style.display = "none";
            }
            btn5.onclick = function() {
                modal5.style.display = "block";
                titulo.style.display = "none";
            }
            btn6.onclick = function() {
                modal6.style.display = "block";
                titulo.style.display = "none";
            }
            btn7.onclick = function() {
                modal7.style.display = "block";
                titulo.style.display = "none";
            }

            // Función para cerrar Modal 1
            span1.onclick = function() {
                modal1.style.display = "none";

            }

            // Función para cerrar Modal 2
            span2.onclick = function() {
                modal2.style.display = "none";
            }

            // Función para cerrar Modal 3
            span3.onclick = function() {
                modal3.style.display = "none";
            }
            span4.onclick = function() {
                modal4.style.display = "none";
            }
            span5.onclick = function() {
                modal5.style.display = "none";
            }
            span6.onclick = function() {
                modal6.style.display = "none";
            }
            span7.onclick = function() {
                modal7.style.display = "none";
            }
            cerrar.onclick = function() {
                modal1.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar2.onclick = function() {
                modal2.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar3.onclick = function() {
                modal3.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar4.onclick = function() {
                modal4.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar5.onclick = function() {
                modal5.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar6.onclick = function() {
                modal6.style.display = "none";
                titulo.style.display = "block";
            }
            cerrar7.onclick = function() {
                modal7.style.display = "none";
                titulo.style.display = "block";
            }
            // Función para cerrar los modales cuando se hace clic fuera del contenido
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal2) {
                    modal2.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal3) {
                    modal3.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal4) {
                    modal4.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal5) {
                    modal5.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal6) {
                    modal6.style.display = "none";
                    titulo.style.display = "block";
                }
                if (event.target == modal7) {
                    modal7.style.display = "none";
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
                $(window).scroll(function() {
                    var heroBottom = $('.hero').offset().top + $('.hero').outerHeight();
                    if ($(window).scrollTop() >= heroBottom) {
                        $('#nav').addClass('fixed-top');
                    } else {
                        $('#nav').removeClass('fixed-top');
                    }
                });



            }
            </script>
            <script>
            $(document).ready(function() {
                $('#btn_buscar').click(function() {
                    var texto_busqueda = $('#texto_busqueda').val();
                    var spinner = $('#spinner');

                    spinner.show();

                    setTimeout(function() {
                        $.ajax({
                            type: 'POST',
                            url: 'buscar.php',
                            data: {
                                texto_busqueda: texto_busqueda
                            },
                            success: function(response) {
                                var resultados = JSON.parse(response);
                                var noticiasContainer = $('#resultado_busqueda');
                                noticiasContainer.html('');

                                if (resultados.length > 0) {
                                    var row = $('<div class="row"></div>');
                                    var contador = 0;
                                    resultados.forEach(function(noticia) {
                                        var estilo_actual = contador % 2 ==
                                            0 ?
                                            "estilo1" : "estilo2";
                                        var noticiaHTML = `
                                <div class="col-md-6 col-12">
                                    <div class="card mb-3 zoom ${estilo_actual}">
                                        <div class="row g-0">
                                            <div class="col-md-4 order-md-${estilo_actual == "estilo1" ? 0 : 1}">
                                                <img src="./imagenes/${noticia.IMAGENES}" alt="Imagen" class="img-fluid rounded-start">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center fw-bolder text-capitalize">${noticia.TITULO}</h5>
                                                    <p class="card-text text-center">${noticia.RESUMEN}</p>
                                                    <div class="text-center text-black" >
                                                        <a href="noticia.php?id=${noticia.ID}" class="btn btn-outline-primary text-black fw-bolder text-upercase mt-3">Leer más...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                                        row.append(noticiaHTML);

                                        if (row.children().length === 2) {
                                            noticiasContainer.append(row);
                                            row = $(
                                                '<div class="row"></div>'
                                                );
                                        }

                                        contador++;
                                    });

                                    if (row.children().length > 0) {
                                        noticiasContainer.append(row);
                                    }

                                    $('.modal').modal();
                                } else {
                                    noticiasContainer.html(
                                        '<p class="alert alert-danger">No se encontraron resultados.</p>'
                                    );
                                }

                                spinner.hide();
                            },
                            error: function() {
                                spinner.hide();
                                $('#resultado_busqueda').html(
                                    '<p class="alert alert-danger">Ha ocurrido un error en la búsqueda.</p>'
                                );
                            }
                        });
                    }, );
                });
            });
            </script>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>

            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous">
            </script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js">
            </script>
</body>

</html>