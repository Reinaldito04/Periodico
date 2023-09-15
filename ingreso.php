<?php

// Verifica si se ha enviado el formulario de inicio de sesión

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnIngresar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $servidor = "localhost";
    $baseDeDatos = "web";
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

            // Muestra el spinner
            echo "<p class='text-primary '>Entrando al Sistema</p>
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
            echo "<div class='alert alert-danger'>Datos erroneos</div>";
        }
    } catch (PDOException $error) {
        $mensajeError = "Error al conectar con la base de datos: " . $error->getMessage();
    }
}
?>