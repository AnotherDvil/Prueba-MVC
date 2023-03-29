<?php
class ConexionBD{
    public function cBD(){
        $bd = new PDO("mysql:host=localhost:5000;dbname=prueba2","root","");
        $bd -> exec("set names utf8");
        return $bd;
    }
}
?>