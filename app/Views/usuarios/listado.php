<div class="">
    <div class="">
        <h2><?php echo $titulo; ?></h2>
        <a class="" href="<?php echo base_url('usuarios/nuevo'); ?>">
            Nuevo Usuario
        </a>
    </div>
    <table class="">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Establecimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?php echo $usuario["nombre"]; ?></td>
                    <td><?php echo $usuario["username"]; ?></td>
                    <td>
                        <?php foreach ($roles as $rol) {
                            if ($usuario['id_rol'] == $rol['id']) {
                                echo $rol['nombre'];
                                break;
                            }
                        } ?>
                    </td>
                    <td>
                        <?php foreach ($establecimientos as $establecimiento) {
                            if ($usuario['id_establecimiento_asignado'] == $establecimiento['id']) {
                                echo $establecimiento['nombre'];
                                break;
                            }
                        } ?>
                    </td>
                    <td>
                        <!--<a class="" href="<?php echo base_url('usuarios/borrar/' . $usuario["id"]); ?>">Eliminar</a>-->
                        <a class="" href="<?php echo base_url('usuarios/editar/' . $usuario["id"]); ?>">Editar</a>
                        <a class="" href="<?php echo base_url('usuarios/ver/' . $usuario["id"]); ?>">Ver</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>