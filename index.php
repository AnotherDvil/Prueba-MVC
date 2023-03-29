<?php
    require "controlador/llamarVistas.php";
    require "controlador/pruebaControlador.php";
    require "modelo/pruebaModelo.php";

    $vista = new llamar();
    $vista -> llamarVistas();
?>