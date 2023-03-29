<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="row p-4">
                <div class="col-md-12">
                    <!-- Tabla donde muestra a los usuarios registrados. -->
                    <h4 class="text-center">Mis usuarios</h4>
                    <table class="table table-bordered table-hover TABLE-ACT">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $verU = new controladorPrueba();
                                $verU -> verUsuariosC();

                                $item = null;
                                $valor = null;
                                $editarU = controladorPrueba::editarUsuario($item,$valor);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php 
                $borrarU = new controladorPrueba();
                $borrarU -> borrarUsuarios();
            ?>

            <div class="row p-4">
                <div class="col-md-12">
                    <!-- Tabla donde muestra a los usuarios registrados. -->
                    <h4 class="text-center">Mis departamentos</h4>
                    <table class="table table-bordered table-hover TABLE-DEPA">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $verD = new controladorDepa;
                                $verD -> verDepas();

                                $item0 = null;
                                $valor0 = null;
                                $editarD = controladorDepa::datosDep($item0, $valor0);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php 
                $borrarD = new controladorDepa();
                $borrarD -> borrarDepas();
            ?>

            <div class="row p-4">
                <div class="col-md-12">
                    <!-- Tabla donde muestra a los usuarios registrados. -->
                    <h4 class="text-center">Mis roles</h4>
                    <table class="table table-bordered table-hover TABLE-ROL">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $verR = new controladorRol;
                                $verR -> verRoles();

                                $item1 = null;
                                $valor1 = null;
                                $editarR = controladorRol::datosRol($item1, $valor1);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
                $borrarR = new controladorRol;
                $borrarR -> borrarRoles();
            ?>

        </div>
    </div>
</div>
<!--MODAL PARA EDITAR USUARIO-->
<div class="modal fade" role="dialog" id="EditarU">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post">
                <!--CABEZA DEL MODAL-->
                <div class="modal-header">
                    <h4 class="modal-title">Editar usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--CUERPO DEL MODAL-->
                <div class="modal-body">
                    <div class="box-body p-4">
                    <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreN" placeholder="Ingresa un nombre" required>
                            <input type="hidden" id="Uid" name="Uid">
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidosN" id="apellidosN" placeholder="Ingresa tus apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad:</label>
                            <input type="text" class="form-control" name="ciudadN" id="ciudadN" placeholder="Ingresa tu ciudad de origen" required>
                        </div>
                        <div class="form-group">Departamento:
                            <select id="departamentoN" class="form-control" name="departamentoN">
                                <?php
                                    $select = new controladorDepa;
                                    $select -> verDepasSelect();
                                ?>
                            </select>
                        </div>
                        <div class="form-group">Rol:
                            <select id="rolN" class="form-control" name="rolN">
                                <?php
                                    $selectR = new controladorRol;
                                    $selectR -> verRolesSelect();
                                ?>
                            </select>
                        </div>
                    </div>   
                </div>
                <!--PIE DEL MODAL-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Editar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </div>
                <?php
                    $actualizarU = new controladorPrueba();
                    $actualizarU -> actualizarUsuario();
                ?>
            </form>
        </div>
    </div>
</div>

<!--MODAL PARA EDITAR EL DEPARTAMENTO-->
<div class="modal fade" role="dialog" id="EditarD">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post">
                <!--CABEZA DEL MODAL-->
                <div class="modal-header">
                    <h4 class="modal-title">Editar departamento</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--CUERPO DEL MODAL-->
                <div class="modal-body">
                    <div class="box-body p-4">
                    <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="form-group">
                            <label for="nombre">Nombre del departamento:</label>
                            <input type="text" class="form-control" name="nombreDN" id="nombreDN" placeholder="Ingresa un nombre" required>
                            <input type="hidden" id="idD" name="idD">
                        </div>
                    </div>   
                </div>
                <!--PIE DEL MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
                <?php
                    $actualizarD = new controladorDepa;
                    $actualizarD -> actualizarDepa();
                ?>
            </form>
        </div>
    </div>
</div>

<!--MODAL PARA EDITAR EL ROL-->
<div class="modal fade" role="dialog" id="EditarR">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post">
                <!--CABEZA DEL MODAL-->
                <div class="modal-header">
                    <h4 class="modal-title">Editar rol</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!--CUERPO DEL MODAL-->
                <div class="modal-body">
                    <div class="box-body p-4">
                    <!-- ENTRADA PARA EL NOMBRE -->
                        <div class="form-group">
                            <label for="nombre">Nombre del rol:</label>
                            <input type="text" class="form-control" name="nombreRN" id="nombreRN" placeholder="Ingresa un nombre" required>
                            <input type="hidden" id="idR" name="idR">
                        </div>
                    </div>   
                </div>
                <!--PIE DEL MODAL-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
                <?php
                    $actualizarR = new controladorRol;
                    $actualizarR -> actualizarRol();
                ?>
            </form>
        </div>
    </div>
</div>