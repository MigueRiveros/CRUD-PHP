<div class="container">
    <div class="card">
        <div class="card-header">
            Agregar User
        </div>

        <?php if (session('mensaje')) { ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> <?=session('mensaje');?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>

        <form action="<?= base_url('/Inicio/store') ?>" method="post">
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                    <input type="phone" class="form-control" id="telefono" placeholder="Ingrese su Telefono"
                        name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label>
                    <input type="Email" class="form-control" id="correo" placeholder="Ingrese su Correo" name="correo">
                </div>

                <input type="submit" value="Guardar" class="btn btn-success">
                <a href="<?= base_url('/Inicio'); ?>" class="btn btn-danger">Cancelar</a>

            </div>
        </form>

    </div>


</div>