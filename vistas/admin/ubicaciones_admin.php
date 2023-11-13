<div class="container mt-5 pt-5">
    <!-- Contenedor de las pestañas -->
    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Activos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Agregar </a>
        </li> 
    </ul>
    <!-- Contenido de las pestañas -->
    <div class="tab-content pt-5" id="myTabsContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

            <div class="border border-dark rounded bg-light  p-2 table-responsive">

                <h5>Usuarios Activos</h5>
                <table class="table table-light w-100 ">
                    <thead>
                        <th></th>
                        <th>Nombre</th> 
                        <th>Estatus</th>
                        <th>Creación</th>
                        <th> </th>
                    </thead>
                    <tbody>
                        <?php 
                        if (isset($ubicaciones) && $ubicaciones != null) {
                        ?>
                            <?php foreach ($ubicaciones as $value) { ?>
                                <tr>
                                    <td><a href="<?= $this->base_url("Usuario/detallesUsuario/" . $value["id"]) ?>" class="text-dark"> 
                                    <?= $value["img_principal"] ?></a></td>
                                    <td><?= $value["nombre"] ?></td>
                                    <td><?= $value["estatus"] ?></td>
                                    <td><?= $value["fecha_creacion"] ?></td>
                                    <td> 
                                        <a href="<?= $this->base_url("/Admin/ubicaciones_detalles/" . $value["id"]) ?>" class="btn btn-outline-primary"> Detalles</a>
                                    </td>
                                </tr>
                            <?php }
                            ?>
                        <?php } else {
                        ?>


                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
        <div class="tab-pane fade " id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
 
                <div class="h-100 d-flex flex-column justify-content-center align-items-center w-100">

                    <form class=" bg-light row border rounded p-1  " action="/Usuario/crearUsuario" method="post">
                        <div class="text-center w-100">
                            <h5>Agregar lugar</h5>
                        </div>
                        <div class="input-group mb-3 text-center d-flex flex-row justify-content-center   pl-5 pr-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span>
                            </div>
                            <input type="text" id="usuario" name="usuario" maxlength="100" required="" class="form-control">
                        </div>
                        <div class="input-group mb-3 text-center d-flex flex-row justify-content-center  pl-5 pr-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                            </div>
                            <input type="text" id="password" name="password" maxlength="100" required="" class="form-control">
                        </div>
                        <div class="input-group mb-3 text-center d-flex flex-row justify-content-center  pl-5 pr-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-app"></i></span>
                            </div>
                            <select id="rol" name="rol" class="form-control">
                                <option value="1">Usuario</option>
                                <option value="0">Admin</option>

                            </select>
                        </div>
                        <div class=" col-12 pt-2 text-center">
                            <input type="submit" class="btn bg-2 text-white" value="Crear Usuario">
                        </div>
                    </form>
                </div> 
        </div>
    </div>
</div>