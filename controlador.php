<?php

if (!empty($_POST["btnIngresar"])) {
    if (empty($_POST["usuario"]) and empty($_POST["password"])){
        echo "LOS CAMPOS ESTA VACIO";
    }else{
        echo "si";

    }
}

?>