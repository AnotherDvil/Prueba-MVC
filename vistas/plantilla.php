<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/css/font-awesome.min.css">
    <link rel="icon" href="vistas/img/icon.jpeg">
  </head>
  <body class="hold-transition skin-blue sidebar-mini login-page">
  <?php
    include "parts/header.php";

    /* Para que funcione el $_GET["ruta"] tiene que ser desde el htaccess */
    if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "registro" || $_GET["ruta"] == "usuarios"){
        include "parts/".$_GET["ruta"].".php";
      } 
    }else{
      include "parts/usuarios.php";
    }
  ?>
    <!-- jQuery 3 -->
    <script src="vistas/js/jquery.min.js"></script>
    <!-- <script src="vistas/js/jquery-3.4.1.min.js"></script> -->
    <!-- JQuery UI 1.11.4 -->
    <script src="vistas/js/jquery-ui.min.js"></script>
    <!-- Resuelve el conflicto en la info de herramienta de JQuery UI con la info de herramienta de Bootstrap  -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/js/tether.min.js"></script>
    <script src="vistas/js/bootstrap.min.js"></script>
    <!-- Ajax -->
    <script src="vistas/js/usuarios.js"></script>
  </body>
</html>