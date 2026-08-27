<div>
    <h2><?php echo $titulo; ?></h2>
    <form action="<?php echo base_url('establecimientos/actualizar'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $establecimiento['id']; ?>">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $establecimiento['nombre']; ?>" required>
        </div>
        <div>
            <label for="cuartel">Cuartel</label>
            <input type="text" name="cuartel" id="cuartel" value="<?php echo $establecimiento['cuartel']; ?>">
        </div>
        <div>
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" required>
                <option value="CAPS" <?php if ($establecimiento['tipo'] == 'CAPS') echo 'selected'; ?>>CAPS</option>
                <option value="Hospital" <?php if ($establecimiento['tipo'] == 'Hospital') echo 'selected'; ?>>Hospital</option>
            </select>
        </div>
        <button type="submit">Actualizar</button>
        <a href="<?php echo base_url('establecimientos'); ?>">Cancelar</a>
    </form>
</div>