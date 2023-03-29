<?php
    require_once "../controlador/pruebaControlador.php";
    require_once "../modelo/pruebaModelo.php";

    class AjaxUsuarios{
        public $Uid;

        public function editarUsuarioAjax(){
            $item = "idU";
            $valor = $this->Uid;
            $respuesta = controladorPrueba::editarUsuario($item, $valor);
            echo json_encode($respuesta);
        }
    }

    if(isset($_POST["Uid"])){
        $editarU = new AjaxUsuarios();
        $editarU -> Uid = $_POST["Uid"];
        $editarU -> editarUsuarioAjax();
    }

    class AjaxDepa{
        public $idD;
        public function editarDepaAjax(){
            $item0 = "idD";
            $valor0 = $this -> idD;
            $respuesta = controladorDepa::datosDep($item0, $valor0);
            echo json_encode($respuesta);
        }
    }

    if(isset($_POST['idD'])){
        $editarD = new AjaxDepa();
        $editarD -> idD = $_POST["idD"];
        $editarD -> editarDepaAjax();
    }

    class AjaxRol{
        public $idR;

        public function editarRolAjax(){
            $item1 = "idR";
            $valor1 = $this -> idR;
            $respuesta = controladorRol::datosRol($item1, $valor1);
            echo json_encode($respuesta);
        }
    }

    if(isset($_POST['idR'])){
        $editarR = new AjaxRol();
        $editarR -> idR = $_POST["idR"];
        $editarR -> editarRolAjax();
    }
?>