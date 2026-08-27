<div class="">
    <h2><?php echo $titulo; ?></h2>
    <form action="<?php echo base_url('usuarios/insertar'); ?>" method="post">
        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" class="" name="nombre" id="nombre" required>
        </div>
        <div class="">
            <label for="username">Usuario</label>
            <input type="text" class="" name="username" id="username" required>
        </div>
        <div class="">
            <label for="password">Contraseña</label>
            <input type="password" class="" name="password" id="password" required>
        </div>
        <div class="">
            <label for="id_rol">Rol</label>
            <select class="" name="id_rol" id="id_rol" required>
                <option value="">Seleccione un rol</option>
                <?php foreach ($roles as $rol) { ?>
                    <option value="<?php echo $rol['id']; ?>">
                        <?php echo $rol['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="id_establecimiento_asignado">
                Establecimiento asignado
            </label>
            <select name="id_establecimiento_asignado"
                    id="id_establecimiento_asignado"
                    required>
                <option value="">Seleccione un establecimiento</option>
                <?php foreach ($establecimientos as $establecimiento) { ?>
                    <option value="<?php echo $establecimiento['id']; ?>">
                        <?php echo $establecimiento['nombre']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="">Guardar</button>
        <a href="<?php echo base_url('usuarios'); ?>" class="">Cancelar</a>
    </form>
</div>