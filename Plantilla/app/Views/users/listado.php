<div class="container">
    <div class="card">
        <div class="card-header">
            Lista de Users
        </div>

        <?php if (session('mensaje')) { ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>User!</strong> <?= session('mensaje'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datos as $dato): ?>
                        <tr>
                            <th scope="row"><?php echo $dato['id']; ?></th>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['telefono']; ?></td>
                            <td>@<?php echo $dato['correo']; ?></td>
                            <td><a class= "btn btn-warning" href="<?=base_url("Inicio/edit/".$dato['id'])?>">Editar</td>-
                            <td><a class= "btn btn-danger" href="<?=base_url("Inicio/delete/".$dato['id'])?>">Eliminar</td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="<?= base_url('/Inicio/add'); ?>" class="btn btn-success">Nuevo</a>
        </div>
    </div>


</div>