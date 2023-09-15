<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./imagenes/logo.webp">
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

    body {
        background: url("./imagenes/background.png");
        background-repeat: no-repeat;
        background-size: cover;

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
        color: rgb(246, 251, 71) !important;
    }

    .logo1 {
        object-fit: contain;
    }
    </style>
    </header>

    <div class="container pt-5">
        <h2 class="text-center display-6 fw-bolder pt-5 text-white">¿Quienes Somos?</h2>

    </div>
    <div class="p-3">
        <div class="card mb-3 zoom mx-auto" id="Carta1">
            <img src="./imagenes/logo.png" class="card-img-top logo1" width="300" height="500" alt="Wild Landscape" />
            <div class="card-body">
                <h5 class="card-title text-center text-capitalize">Informacion sobre la institución</h5>
                <p class="card-text text-center">
                    La Unidad Educativa Industrial “Juan Crisóstomo Falcón”,instituto educativo a nivel
                    básico y diversificado y profesional, aprobada por el Ministerio del Poder Popular para la
                    Educación Bajo el código DEA PD00460304 en resolución de fecha 10 de Junio de 1996.
                </p>
                <p class="card-text text-center">
                    Nació como un liceo con asiento en la Avenida Intercomunal Jorge Rodríguez, para darle
                    apertura a una serie de especialidades a nivel de tercera etapa de Educación Básica y
                    Diversificado y Profesional. Para así graduar jóvenes en áreas de vanguardia tecnológicas y
                    gran demanda en el país.
                </p>

            </div>
            <div class="card-footer">

            </div>
        </div>


    </div>


    <div class="p-3">
        <div class="card-group p-1" id="cartas">
            <div class="card zoom" id="carta2">
                <img src="./imagenes/foto1.jpg" class="card-img-top" alt="Fotografia de la institución" />
                <div class="card-body">
                    <h5 class="card-title text-center">Información</h5>
                    <p class="card-text text-center">
                        Después de haber hecho estudios especializados sobre las necesidades educativas, se
                        decidió, la creación de esta Institución con la inclusión de Bachilleres Industriales y
                        Técnicos Medio en las Menciones de: INFORMÁTICA, ELECTRÓNICA,
                        ELECTRICIDAD, INSTRUMENTACIÓN E HIDROCARBUROS y Bachilleres en
                        CIENCIAS, en sus planes de estudios.
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card zoom " id="carta3">
                <img src="./imagenes/foto2.jpg" class="card-img-top" alt="Fotografia de la institución" />
                <div class="card-body">
                    <h5 class="card-title text-center">Información</h5>
                    <p class="card-text text-center ">La Institución inició sus actividades con un promedio de 480
                        alumnos, orientando su
                        formación hacia las áreas especializadas, como liceo de tecnología, para cubrir las
                        expectativas muy exigentes del desarrollo industrial, que demanda la mano de obra
                        especializada y bien calificada.</p>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card zoom" id="carta4">
                <img src="./imagenes/foto3.jpg" class="card-img-top" alt="Fotografia de la institución" />
                <div class="card-body">
                    <h5 class="card-title text-center">Información</h5>
                    <p class="card-text text-center">
                        Esta Institución contribuye a llenar el gran vacío que supone la casi nula existencia de este
                        tipo de carreras a nivel regional. Al mismo tiempo nuestros alumnos egresan como
                        Bachilleres Industriales y Técnicos Medios, en cualquiera de las ramas de especialización o
                        la de Ciencias, también mucho mejor destacados y preparados para desenvolverse,
                        excelentemente, a nivel de estudios superiores.
                    </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <h2 class="text-center display-6 fw-bolder fst-italic pt-5 text-white">Convenios</h2>

    </div>
    <div class="p-3">
        <div class="card mb-3 zoom mx-auto" id="Carta1">
            <img src="./imagenes/ADAKADEMIA-LOGO.png" class="card-img-top convenio" width="300" height="500"
                alt="Wild Landscape" />
            <div class="card-body">
                <h5 class="card-title text-center text-capitalize">Convenio con <a
                        href="https://www.instagram.com/adakademy/"
                        class="text-decoration-none  text-primary">Adakademy</a></h5>
                <p class="card-text text-center">
                    Institución enfoncada en la enseñaza de niños ,niñas y jovenes sobre robótica educativa y
                    programación de apps en diversos lenguajes
                    de programación , Python , JS ,C++ , lógica y demás...
                </p>


            </div>
            <div class="card-footer">

            </div>
        </div>
        <style>
        .adakademy {
            width: 100%;
            object-fit: contain;
        }
        </style>

    </div>

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
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
    window.sr = ScrollReveal();
    sr.reveal('#Carta1', {
        duration: 1500,
        origin: 'botoom',

    });
    window.sr = ScrollReveal();
    sr.reveal('#carta2', {
        duration: 1000,
        origin: 'top',

    });
    window.sr = ScrollReveal();
    sr.reveal('#carta3', {
        duration: 1500,
        origin: 'top',

    });
    window.sr = ScrollReveal();
    sr.reveal('#carta4', {
        duration: 2000,
        origin: 'top',

    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>


</body>

</html>