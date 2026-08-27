
<form action="<?php echo base_url('/validarLogin') ?>" method="post">
  <div class="">
    <label for="username">Usuario</label>
    <input type="text" class="" name="username">
  </div>
  <div class="">
    <label for="password">Contraseña</label>
    <input type="password" class="" name="password">
  </div>
  <button type="submit" class="">Entrar</button>
</form>
<?php if (session()->getFlashdata('error')) { ?>
    <div>
        <?php echo session()->getFlashdata('error'); ?>
    </div>
<?php } ?>