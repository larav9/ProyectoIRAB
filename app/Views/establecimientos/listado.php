<div>
    <div>
        <h2><?php echo $titulo; ?></h2>
        <a href="<?php echo base_url('establecimientos/nuevo'); ?>">Nuevo Establecimiento</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cuartel</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establecimientos as $establecimiento) { ?>
                <tr>
                    <td><?php echo $establecimiento["nombre"]; ?></td>
                    <td><?php echo $establecimiento["cuartel"]; ?></td>
                    <td><?php echo $establecimiento["tipo"]; ?></td>
                    <td>
                        <!-- <a href="<?php echo base_url('establecimientos/borrar/' . $establecimiento["id"]); ?>">Eliminar</a>-->
                        <a href="<?php echo base_url('establecimientos/editar/' . $establecimiento["id"]); ?>">Editar</a>
                        <a href="<?php echo base_url('establecimientos/ver/' . $establecimiento["id"]); ?>">Ver</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>