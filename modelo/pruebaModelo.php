<?php
    require_once "conexionBD.php";

    class modeloPrueba extends ConexionBD{

        static public function nuevosUsuariosModel($tabla, $datos){
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tabla(nombre, apellidos, ciudad, idDep, idRol) VALUES (:nombre, :apellidos, :ciudad, :idDep, :idRol)");
            $pdo -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellidos", $datos["apellidos"], PDO::PARAM_STR);
            $pdo -> bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
            $pdo -> bindParam(":idDep", $datos["departamento"], PDO::PARAM_INT);
            $pdo -> bindParam(":idRol", $datos["rol"], PDO::PARAM_INT);
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function verUsuarios($tabla, $tabla2, $tabla3){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tabla as u, $tabla2 as r, $tabla3 as d WHERE u.idRol = r.id AND u.idDep = d.id");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function borrarUsuario($tabla, $datos){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tabla WHERE idU = :idU");
            $pdo -> bindParam(":idU", $datos, PDO::PARAM_INT);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function datosUsuarioEdit($tabla, $item, $valor){
            if($item != null){
                $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tabla as u, roles as r, departamentos as d WHERE u.idU = :$item AND u.idRol = r.id AND u.idDep = d.id");
                $pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
            }else{
                $pdo = ConexionBD::cBD() -> prepare("SELECT * from $tabla");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }
        }

        static public function actualizarUsuario($tabla, $datosC){
            $pdo = ConexionBD::cBD()->prepare("UPDATE $tabla set nombre = :nombre, apellidos = :apellidos, ciudad = :ciudad, idDep = :idDep, idRol = :idRol 
            WHERE idU = :id");
            $pdo -> bindParam(":id", $datosC["idU"], PDO::PARAM_INT);
            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellidos", $datosC["apellidos"], PDO::PARAM_STR);
            $pdo -> bindParam(":ciudad", $datosC["ciudad"], PDO::PARAM_STR);
            $pdo -> bindParam(":idDep", $datosC["departamento"], PDO::PARAM_INT);
            $pdo -> bindParam(":idRol", $datosC["rol"], PDO::PARAM_INT);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

    }

    class depaModelo extends ConexionBD{
        static public function nuevoDepaModel($tabla, $datos){
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tabla (descripcionD) VALUES (:descripcionD)");
            $pdo -> bindParam(":descripcionD", $datos, PDO::PARAM_STR);
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function verDepasModel($tabla){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tabla");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function borrarDepa($tabla, $datos){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tabla WHERE id = :id");
            $pdo -> bindParam(":id", $datos, PDO::PARAM_STR);
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function datosDepaEditar($tabla, $item0, $valor0){
            if($item0 != null){
                $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tabla WHERE id = :$item0");
                $pdo -> bindParam(":".$item0, $valor0, PDO::PARAM_INT);
                $pdo -> execute();
                return $pdo -> fetch();
            }else{
                $pdo = ConexionBD::cBD() -> prepare("SELECT * from $tabla");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }
        }

        static public function actualizarDepa($tabla, $datosC){
            $pdo = ConexionBD::cBD()->prepare("UPDATE $tabla set descripcionD = :descripcionD WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["idD"], PDO::PARAM_INT);
            $pdo -> bindParam(":descripcionD", $datosC["descripcionD"], PDO::PARAM_STR);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }
    }

    class rolesModelo extends ConexionBD{
        static public function nuevoRolModel($tabla, $datos){
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tabla (descripcionR) VALUES (:descripcionR)");
            $pdo -> bindParam(":descripcionR", $datos, PDO::PARAM_STR);
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function verRolesModel($tabla){
            $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tabla");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }

        static public function borrarRol($tabla, $datos){
            $pdo = ConexionBD::cBD() -> prepare("DELETE FROM $tabla WHERE id = :id");
            $pdo -> bindParam(":id", $datos, PDO::PARAM_STR);
            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

        static public function datosRolEditar($tabla, $item1, $valor1){
            if($item1 != null){
                $pdo = ConexionBD::cBD() -> prepare("SELECT * FROM $tabla WHERE id = :$item1");
                $pdo -> bindParam(":".$item1, $valor1, PDO::PARAM_INT);
                $pdo -> execute();
                return $pdo -> fetch();
            }else{
                $pdo = ConexionBD::cBD() -> prepare("SELECT * from $tabla");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }
        }

        static public function actualizarRol($tabla, $datosC){
            $pdo = ConexionBD::cBD()->prepare("UPDATE $tabla set descripcionR = :descripcionR WHERE id = :id");
            $pdo -> bindParam(":id", $datosC["idR"], PDO::PARAM_INT);
            $pdo -> bindParam(":descripcionR", $datosC["descripcionR"], PDO::PARAM_STR);

            if($pdo -> execute()){
                return true;
            }else{
                return false;
            }
        }

    }
?>