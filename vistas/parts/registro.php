    <div class="container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="row p-3">
                    <div class="col-12">
                        <form role="form" method="POST">
                            <h4 class="text-center">Formulario para nuevos usuarios</h4>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa un nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingresa tus apellidos" required>
                            </div>

                            <div class="form-group">
                                <label for="ciudad">Ciudad:</label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad de origen" required>
                            </div>

                            <div class="form-group"> Departamento:
                                <select class="form-control" name="departamento">
                                    <?php
                                        $select = new controladorDepa;
                                        $select -> verDepasSelect();
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">Rol:
                                <select class="form-control" name="rol">
                                    <?php
                                        $selectR = new controladorRol;
                                        $selectR -> verRolesSelect()
                                    ?>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>

                            <?php 
                                $crear = new controladorPrueba();
                                $crear -> nuevosUsuarios();
                            ?>
                        </form>
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-12">
                        <form method="POST">
                            <h4 class="text-center">Formulario para nuevos departamentos</h4>
                            <div class="form-group">
                                <label for="nombre">Nombre del departamento:</label>
                                <input type="text" class="form-control" name="nombreD" id="nombreD" placeholder="Ingresa un departamento" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="enviarD" class="btn btn-success">Enviar</button>
                            </div>

                            <?php 
                                $crear = new controladorDepa();
                                $crear -> nuevoDepa();
                            ?>
                        </form>

                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-12">
                        <form method="POST">
                            <h4 class="text-center">Formulario para nuevos roles</h4>
                            <div class="form-group">
                                <label for="nombre">Nombre del rol:</label>
                                <input type="text" class="form-control" name="nombreR" id="nombreR" placeholder="Ingresa un rol" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="enviarR" class="btn btn-warning">Enviar</button>
                            </div>

                            <?php 
                                $crearR = new controladorRol;
                                $crearR -> nuevoRol();
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>