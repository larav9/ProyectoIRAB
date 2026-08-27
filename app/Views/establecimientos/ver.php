<div>
    <h2><?php echo $titulo; ?></h2>
    <div>
        <label>Nombre</label>
        <input type="text" value="<?php echo $establecimiento['nombre']; ?>" readonly>
    </div>
    <div>
        <label>Cuartel</label>
        <input type="text" value="<?php echo $establecimiento['cuartel']; ?>" readonly>
    </div>
    <div>
        <label>Tipo</label>
        <input type="text" value="<?php echo $establecimiento['tipo']; ?>" readonly>
    </div>
    <a href="<?php echo base_url('establecimientos'); ?>">Volver</a>
</div>