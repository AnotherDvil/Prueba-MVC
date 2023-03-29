<?php
require_once "../../controlador/pruebaControlador.php";
require_once "../../modelo/pruebaModelo.php";
require_once "../../vendor/autoload.php";
use Dompdf\Dompdf;

ob_start();
require "../../vistas/parts/pdf.php";
$dompdf = new DOMPDF();
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Ejercicio.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);