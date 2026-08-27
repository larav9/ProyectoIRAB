<div class="">
    <h2><?php echo $titulo; ?></h2>
    <div class="">
        <label>ID</label>
        <input type="text" class="" value="<?php echo $rol['id']; ?>" readonly>
    </div>
    <div class="">
        <label>Nombre</label>
        <input type="text" class="" value="<?php echo $rol['nombre']; ?>" readonly>
    </div>
    <a href="<?php echo base_url('roles'); ?>" class="">
        Volver
    </a>
</div>