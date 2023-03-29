
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-5">
            <h4 class="text-center">Usuarios en el sistema</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Rol</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $verU = new controladorPrueba;
                        $verU -> verUsuariosPDF();
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-12 p-5">
            <h4 class="text-center">Departamentos en el sistema</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $verD = new controladorDepa;
                        $verD -> verDepasPDF();
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-12 p-5">
            <h4 class="text-center">Roles en el sistema</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $verR = new controladorRol;
                        $verR -> verRolesPDF();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
