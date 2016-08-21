<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 frmAdminLogin">
	<?php if(file_exists("images/logo.png") || file_exists("../images/logo.png")): ?>
        <img src="<?php echo ROOT_HOST; ?>images/logo.png" style="display: inherit; height: 100px; width: auto; margin: 0 auto;" alt="<?php echo $site_details['site_name']; ?> Logo" />
      <?php endif;
       ?>
	<h2 style="text-align: center;"><?php echo $site_details['site_name']; ?></h3>
	
	<p style="margin-top: 10px; margin-bottom: 0;"><i class="fa fa-user"></i> Correo Electronico:</p>
	<input type="text" class="form-control txtEmail" placeholder="Usuario" />
	
	<p style="margin-top: 10px; margin-bottom: 0;"><i class="fa fa-key"></i> Contrase&ntilde;a:</p>
	<input type="password" class="form-control txtPassword" placeholder="Contrase&ntilde;a" />
	
	<input type="button" class="btn btn-primary form-control btnAdminLogin" value="Iniciar Sesi&oacute;n" />
	<a href="../" class="btn btn-default form-control btnAdminCancelar">Cancelar</a>
</div>