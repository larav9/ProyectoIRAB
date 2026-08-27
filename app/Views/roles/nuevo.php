<div class="">
    <h2><?php echo $titulo; ?></h2>
    <form action="<?php echo base_url('roles/insertar'); ?>" method="post">
        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" class="" name="nombre" id="nombre" required>
        </div>
        <button type="submit" class="">
            Guardar
        </button>
        <a href="<?php echo base_url('roles'); ?>" class="">
            Cancelar
        </a>
    </form>
</div>