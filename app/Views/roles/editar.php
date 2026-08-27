<div class="">
    <h2><?php echo $titulo; ?></h2>
    <form action="<?php echo base_url('roles/actualizar'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $rol['id']; ?>">
        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" class="" name="nombre" id="nombre" value="<?php echo $rol['nombre']; ?>" required>
        </div>
        <button type="submit" class="">
            Guardar
        </button>
        <a href="<?php echo base_url('roles'); ?>" class="">
            Cancelar
        </a>
    </form>
</div>