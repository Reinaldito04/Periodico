<?php

// Verifica si se ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnIngresar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $servidor = "localhost";
    $baseDeDatos = "noticias";
    $usuarioDB = "root";
    $passwordDB = "";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuarioDB, $passwordDB);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $conexion->prepare("SELECT * FROM ingresos WHERE usuario=:usuario AND clave=:contrasena");
        $consulta->execute(['usuario' => $usuario, 'contrasena'  => $password]);

        if ($consulta->rowCount() == 1) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            
            
             
             $spinner= "<p class='text-primary '>Entrando al Sistema</p>
             <div id='spinner' class='spinner-border text-primary' role='status'>
                     <span class='visually-hidden'>Loading...</span>
                     
                   </div>
                   ";
 
             // Agrega el script de JavaScript para ocultar el spinner después de 2 segundos
             echo "<script>
                     setTimeout(function() {
                         document.getElementById('spinner').style.display = 'none';
                         window.location.href = 'administracion.php';
                     }, 1500);
                   </script>";
           
        } else {
            // Almacena el mensaje de error en una variable de sesión
           
            $errorSesion = "<div class='alert alert-danger'>Datos erroneos</div>";
            
        }
    } catch (PDOException $error) {
        $mensajeError = "Error al conectar con la base de datos: " . $error->getMessage();
    }
}

// Muestra el mensaje de error si existe
if (isset($_SESSION['mensajeError'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['mensajeError'] . "</div>";
    unset($_SESSION['mensajeError']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="imagenes/LOGO-removebg-preview.png">
</head>

<body>
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
        body{
        background: url("./imagenes/background.png");
       background-repeat: no-repeat;
       background-size: cover;
       
    }
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



    <section class="vh-100 p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">



                    <div
                        class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 text-center">

                        <form style="width: 23rem;" method="post">

                            <h3 class="fw-normal   text-center text-white " style="letter-spacing: 1px;">LOGIN
                            </h3>
                            <p class="fw-bold font-monospace text-center text-white text-uppercase "> Admin</p>
                            <div class="form-outline mb-4">
                                <input type="text" placeholder="Ingrese su usuario" id="usuario" name="usuario"
                                    class="form-control text-center form-control-lg" />

                            </div>
                            <div class="form-outline mb-2">
                                <input type="password" placeholder="Ingrese su contraseña" name="password" id="password"
                                    class="form-control form-control-lg text-center" />



                                <button class="btn text-white  " type="button" onclick="mostrarContrasena()">
                                    <i id="icono" class="bi bi-eye text-white"></i>Mostrar Contraseña</button>





                            </div>
                            <div class="mb-2 ">
                                <button class="btn btn-outline-primary rounded-pill btn-lg" name="btnIngresar"
                                    type="submit">Ingresar</button>
                            </div>


                            <style>
                            .checkbox-container input[type="checkbox"]:checked+i.bi-eye {
                                display: none;
                            }

                            .checkbox-container input[type="checkbox"]:checked+i.bi-eye-slash {
                                display: inline;
                            }

                            #icono {
                                margin-top: 2px;
                                margin-left: 2px;
                                color: black;
                                font-size: 18px;

                            }
                            </style>
                            <?php 
                            
        // Muestra el spinner si la variable $spinner está definida
        if (isset($spinner)) {
            echo $spinner;
        }
        if (isset($errorSesion)){
            echo $errorSesion;
        }
    ?>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 p-3 d-none d-sm-block">
                    <img src="./imagenes/logo.png " alt="Login image" class="img-fluid  p-3"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
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
    <script>
    function mostrarContrasena() {
        var icono = document.getElementById("icono");
        icono.classList.toggle('bi-eye');
        icono.classList.toggle('bi-eye-slash');
        var tipo = document.getElementById("password");
        if (tipo.type == "password") {
            tipo.type = "text";
        } else {
            tipo.type = "password";
        }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>