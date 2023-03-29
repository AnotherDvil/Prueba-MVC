<?php
class controladorPrueba{

    static public function nuevosUsuarios(){
        if(isset($_POST["enviar"])){
            $tabla = "usuarios";
            
            $datos = array(
                "nombre"=>$_POST["nombre"], 
                "apellidos"=>$_POST["apellidos"], 
                "ciudad"=>$_POST["ciudad"], 
                "departamento"=>$_POST["departamento"], 
                "rol"=>$_POST["rol"]);

            $respuesta = modeloPrueba::nuevosUsuariosModel($tabla, $datos);

            if($respuesta == true){
                echo '<script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo "<p class='text-danger text-center pt-3'>Error al crear el usuario</p>"; 
            }
        }
    }

    static public function verUsuariosC(){
        $tabla = "usuarios";
        $tabla2 = "roles";
        $tabla3 = "departamentos";
        $respuesta = modeloPrueba::verUsuarios($tabla, $tabla2, $tabla3);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                        <th>'.($key + 1).'</th>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["apellidos"].'</td>
                        <td>'.$value["ciudad"].'</td>
                        <td>'.$value["descripcionD"].'</td>
                        <td>'.$value["descripcionR"].'</td>
                        <td>
                            <button class="btn btn-danger EliminarU" Uid="'.$value["idU"].'">Eliminar</button>
                            <button class="btn btn-success EditarU" Uid="'.$value["idU"].'" data-toggle="modal" data-target="#EditarU">Editar</button>
                        </td>
                    </tr>';
            }
        }else{
            echo "<td colspan='7' class='text-danger'>¡No hay usuarios en el sistema!</td> ";
        }
    }

    static public function borrarUsuarios(){
        if(isset($_GET['Uid'])){
            $tabla = "usuarios";
            $datos = $_GET['Uid'];

            $respuesta = modeloPrueba::borrarUsuario($tabla, $datos);

            if($respuesta == true){
                echo '<script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo error_reporting(E_ALL);
                echo "<p class='text-danger text-center'>Error al borrar el usuario</p>";
            }
        }
    }

    static public function editarUsuario($item, $valor){
        $tabla = "usuarios";
        $respuesta = modeloPrueba::datosUsuarioEdit($tabla, $item, $valor);
        return $respuesta;
    }

    static public function actualizarUsuario(){
        if(isset($_POST["Uid"])){
            $tabla = "usuarios";
            $datosC = array(
                "idU" => $_POST["Uid"], 
                "nombre" => $_POST["nombreN"], 
                "apellidos" => $_POST["apellidosN"], 
                "ciudad" => $_POST["ciudadN"], 
                "departamento" => $_POST["departamentoN"], 
                "rol" => $_POST["rolN"]);
            $respuesta = modeloPrueba::actualizarUsuario($tabla, $datosC);

            if($respuesta == true){
                echo '<script>
                        window.location = "usuarios";
                    </script>';
            }else{
                echo "<p class='text-danger text-center'>Error al actualizar el usuario</p>";
            }
        }
    } 

    static public function verUsuariosPDF(){
        $tabla = "usuarios";
        $tabla2 = "roles";
        $tabla3 = "departamentos";
        $respuesta = modeloPrueba::verUsuarios($tabla, $tabla2, $tabla3);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                        <th>'.($key + 1).'</th>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["apellidos"].'</td>
                        <td>'.$value["ciudad"].'</td>
                        <td>'.$value["descripcionD"].'</td>
                        <td>'.$value["descripcionR"].'</td>
                    </tr>';
            }
        }else{
            echo "<td colspan='7' class='text-danger'>¡No hay usuarios en el sistema!</td> ";
        }
    }

}

class controladorDepa{
    public function nuevoDepa(){
        if(isset($_POST["enviarD"])){
            $tabla = "departamentos";
            
            $datos = $_POST['nombreD'];

            $respuesta = depaModelo::nuevoDepaModel($tabla, $datos);

            if($respuesta == true){
                echo ' <script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo "<p class='text-danger text-center pt-3'>Error al crear el departamento</p>";
            }
        }
    }

    public function verDepas(){
        $tabla = "departamentos";

        $respuesta = depaModelo::verDepasModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                    <th>'.($key + 1).'</th>
                    <td>'.$value["descripcionD"].'</td>
                    <td>
                        <button class="btn btn-warning EliminarD" idD="'.$value['id'].'">Eliminar</button>
                        <button class="btn btn-primary EditarD" idD="'.$value['id'].'" data-toggle="modal" data-target="#EditarD">Editar</button>
                    </td>
                </tr>';
            }
        }else{
            echo "<td colspan='3' class='text-danger'>¡No hay departamentos en el sistema!</td> ";
        }
    }

    public function borrarDepas(){
        if(isset($_GET['idD'])){
            $tabla = "departamentos";
            $datos = $_GET['idD'];

            $respuesta = depaModelo::borrarDepa($tabla, $datos);

            if($respuesta == true){
                echo '<script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo "<p class='text-danger text-center'>Error al borrar el departamento</p>";
            }
        }
    }

    static public function datosDep($item0, $valor0){
        $tabla = "departamentos";
        $respuesta = depaModelo::datosDepaEditar($tabla, $item0, $valor0);
        return $respuesta;
    }

    public function actualizarDepa(){
        if(isset($_POST["idD"])){
            $tabla = "departamentos";
            $datosC = array(
                "idD" => $_POST["idD"], 
                "descripcionD" => $_POST["nombreDN"]
            );
                
            $respuesta = depaModelo::actualizarDepa($tabla, $datosC);

            if($respuesta == true){
                echo '<script>
                        window.location = "usuarios";
                    </script>';
            }else{
                echo "<p class='text-danger text-center'>Error al actualizar el departamento</p>";
            }
        }
    }
    
    public function verDepasSelect(){
        $tabla = "departamentos";

        $respuesta = depaModelo::verDepasModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<option value="'.$value['id'].'">'.$value['descripcionD'].'</option>';
            }
        }else{
            echo'<option value="1">Sin departamento</option>';
        }
    }

    public function verDepasPDF(){
        $tabla = "departamentos";
        $respuesta = depaModelo::verDepasModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                        <th>'.($key + 1).'</th>
                        <td>'.$value["descripcionD"].'</td>
                    </tr>';
            }
        }else{
            echo "<td colspan='3' class='text-danger'>¡No hay departamentos en el sistema!</td> ";
        }
    }
}

class controladorRol{
    public function nuevoRol(){
        if(isset($_POST["enviarR"])){
            $tabla = "roles";
            
            $datos = $_POST['nombreR'];

            $respuesta = rolesModelo::nuevoRolModel($tabla, $datos);

            if($respuesta == true){
                echo ' <script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo "<p class='text-danger text-center pt-3'>Error al crear el rol</p>";
            }
        }
    }

    public function verRoles(){
        $tabla = "roles";

        $respuesta = rolesModelo::verRolesModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                    <th>'.($key + 1).'</th>
                    <td>'.$value["descripcionR"].'</td>
                    <td>
                        <button class="btn btn-danger EliminarR" idR="'.$value['id'].'">Eliminar</button>
                        <button class="btn btn-info EditarR" idR="'.$value['id'].'" data-toggle="modal" data-target="#EditarR">Editar</button>
                    </td>
                </tr>';
            }
        }else{
            echo "<td colspan='3' class='text-danger'>¡No hay roles en el sistema!</td> ";
        }
    }

    public function borrarRoles(){
        if(isset($_GET['idR'])){
            $tabla = "roles";
            $datos = $_GET['idR'];

            $respuesta = rolesModelo::borrarRol($tabla, $datos);

            if($respuesta == true){
                echo '<script>
                    window.location = "usuarios";
                </script>';
            }else{
                echo "<p class='text-danger text-center'>Error al borrar el rol</p>";
            }
        }
    }

    static public function datosRol($item1, $valor1){
        $tabla = "roles";
        $respuesta = rolesModelo::datosRolEditar($tabla, $item1, $valor1);
        return $respuesta;
    }

    public function actualizarRol(){
        if(isset($_POST["idR"])){
            $tabla = "roles";
            $datosC = array(
                "idR" => $_POST["idR"], 
                "descripcionR" => $_POST["nombreRN"]
            );
                
            $respuesta = rolesModelo::actualizarRol($tabla, $datosC);

            if($respuesta == true){
                echo '<script>
                        window.location = "usuarios";
                    </script>';
            }else{
                echo "<p class='text-danger text-center'>Error al actualizar el rol</p>";
            }
        }
    }

    public function verRolesSelect(){
        $tabla = "roles";

        $respuesta = rolesModelo::verRolesModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<option value="'.$value['id'].'">'.$value['descripcionR'].'</option>';
            }
        }else{
            echo'<option value="1">Sin roles</option>';
        }
    }

    public function verRolesPDF(){
        $tabla = "roles";
        $respuesta = rolesModelo::verRolesModel($tabla);

        if(!empty($respuesta)){
            foreach($respuesta as $key => $value){
                echo'<tr>
                        <th>'.($key + 1).'</th>
                        <td>'.$value["descripcionR"].'</td>
                    </tr>';
            }
        }else{
            echo "<td colspan='3' class='text-danger'>¡No hay departamentos en el sistema!</td> ";
        }
    }
}
?>