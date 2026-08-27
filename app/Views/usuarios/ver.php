<div>
    <h2><?php echo $titulo; ?></h2>
    <div>
        <label>Nombre: </label>
        <input type="text" value="<?php echo $usuario['nombre']; ?>" readonly>
    </div>
    <div>
        <label>Usuario: </label>
        <input type="text" value="<?php echo $usuario['username']; ?>" readonly>
    </div>
    <div>
        <label>Rol: </label>
        <?php
        foreach ($roles as $rol) { if ($usuario['id_rol'] == $rol['id']) { echo $rol['nombre'];
                break;
            }
        }
        ?>
    </div>
    <div>
        <label>Establecimiento asignado: </label>
        <?php
        foreach ($establecimientos as $establecimiento) { if ($usuario['id_establecimiento_asignado'] == $establecimiento['id']) { echo $establecimiento['nombre'];
                break;
            }
        }
        ?>
    </div>
    <a href="<?php echo base_url('usuarios'); ?>">Volver</a>
</div>