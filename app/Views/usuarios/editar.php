<div>
    <h2><?php echo $titulo; ?></h2>
    <form action="<?php echo base_url('usuarios/actualizar'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required>
        </div>
        <div>
            <label for="username">Usuario</label>
            <input type="text" name="username" id="username" value="<?php echo $usuario['username']; ?>" required>
        </div>
        <div>
            <label for="password">Nueva contraseña</label>
            <input type="password" name="password" id="password">
            <small>Dejar vacío para mantener la contraseña actual.</small>
        </div>
        <div>
            <label for="id_rol">Rol</label>
            <select name="id_rol" id="id_rol" required>
                <?php foreach ($roles as $rol) { ?>
                    <option value="<?php echo $rol['id']; ?>" <?php if ($usuario['id_rol'] == $rol['id']) echo 'selected'; ?>>
                        <?php echo $rol['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="id_establecimiento_asignado">
                Establecimiento asignado
            </label>
            <select name="id_establecimiento_asignado" id="id_establecimiento_asignado" required>
                <option value="">Seleccione un establecimiento</option>
                <?php foreach ($establecimientos as $establecimiento) { ?>
                    <option value="<?php echo $establecimiento['id']; ?>"
                        <?php
                        if ($usuario['id_establecimiento_asignado'] == $establecimiento['id']) {
                            echo 'selected';
                        }
                        ?>>
                        <?php echo $establecimiento['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button type="submit">Actualizar</button>
        <a href="<?php echo base_url('usuarios'); ?>">Cancelar</a>
    </form>
</div>