<div class="row" style="margin: 20px 0;">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="background-color: #fff;">
		<ul class="nav nav-pills nav-stacked">
		  <li role="presentation" <?php if( !isset($_GET['charge_data']) && !isset($_GET['products']) ): ?> class="active" <?php endif; ?>><a href="<?php echo ROOT_HOST; ?>admin">Informaci&oacute;n Generales</a></li>
		  <li role="presentation" <?php if( isset($_GET['charge_data'])  && !isset($_GET['products']) ): ?> class="active" <?php endif; ?>><a href="?charge_data">Datos De Cobro</a></li>
		  <li role="presentation" <?php if( !isset($_GET['charge_data']) && isset($_GET['products']) ): ?> class="active" <?php endif; ?>><a href="?products">Productos</a></li>
		</ul>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<?php if( !isset($_GET['charge_data']) && !isset($_GET['products']) ): ?>
			<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="background-color: #fff; padding: 15px 0; border-radius: 10px;">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="stats_square stat_orange">
							<h2><i class="fa fa-user"></i></h2>
							<h4>Clientes: <?php echo $user_count['user_count']; ?></h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="stats_square stat_red">
							<h2><i class="fa fa-users"></i></h2>
							<h4>Administradores: <?php echo $admin_count['admin_count']; ?></h4>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="stats_square stat_grey">
							<h2><i class="fa fa-shopping-cart"></i></h2>
							<h4>Productos: <?php echo $product_count['product_count']; ?></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: #fff; padding: 15px; border-radius: 10px; margin-top: 20px;">
				<h2><i class="fa fa-cog"></i> Datos Generales</h2>
				<div class="row">
					<p class="col-lg-6 col-md-6 col-sm-6">
						<b>Nombre Del Sitio: </b>
						<input type="text" class="txtSiteName form-control" maxlength="25" plcaeholder="Nombre Del Sitio" value="<?php echo $site_details['site_name']; ?>" />
					</p>
					<p class="col-lg-6 col-md-6 col-sm-6">
						<form action="../res/php/uploadLogo.php" method="post" enctype="multipart/form-data">
							<b>O puede seleccionar un logotipo <small class="helpLogo" data-toggle="tooltip" data-placement="top" title="Al seleccionar un logotipo, este remplazar&aacute; al nombre del sitio en la parte superior izquierda.">(?)</small> </b>
							<input type="file" value="<?php echo $site_details['site_theme']; ?>" />
							<input type="submit" class="btn btn-primary pull-right" value="Cambiar Logo" />
							<?php if(file_exists("../images/logo.png")): ?>
								<a href="<?php echo ROOT_HOST . "delete-logo"; ?>" style="marghin-tóp: 15px;"><small>Eliminar logo actual</small></a>
							<?php endif; ?>
						</form>
					</p>
				</div>
				<p>
					<b>Telefono Del Sitio: </b>
					<input type="text" class="txtSitePhone form-control" maxlength="20" plcaeholder="Telefono Del Sitio" value="<?php echo $site_details['site_phone']; ?>" />
				</p>
				<p>
					<b>Correo Electronico Del Sitio: </b>
					<input type="text" class="txtSiteEmail form-control" maxlength="50" plcaeholder="Correo Electronico Del Sitio" value="<?php echo $site_details['site_email']; ?>" />
				</p>
				<p>
					<b>Tema Del Sitio: </b>
					<input type="color" class="colorPicker form-control" value="<?php echo $site_details['site_theme']; ?>" />
				</p>
				<div class="row">
					<p class="col-lg-6 col-md-6 col-sm-6">
						<b>Color de letras: </b>
						<div class="checkbox">
							<label>
					    		<input type="radio" name="fontColor" <?php if($site_details['site_nav_letters'] == '1'): echo "checked"; endif; ?> class="fontColor" value="1"> Claro &nbsp;&nbsp;
							</label>
			      			<label>
					    		<input type="radio" name="fontColor" <?php if($site_details['site_nav_letters'] !== '1'): echo "checked"; endif; ?> class="fontColor" value="2"> Obscuro
					    	</label>
					    </div>
					</p>
				</div>
				<p>
					<small>&Uacute;ltima actualizaci&oacute;n: <?php echo date("d/m/Y G:i a", $site_details['last_updated']); ?></small>
				</p>
				<p>
					<button class="btn btn-primary pull-right btnUpdateSite"><i class="fa fa-check"></i> Actualizar Sitio</button>
					<div class="clearfix"></div>
				</p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: #fff; padding: 15px; border-radius: 10px; margin-top: 20px;">
				<h2><i class="fa fa-users"></i> Administradores</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>Nombre(s)</th>
							<th>Apellido(s)</th>
							<th>Correo Electronico</th>
							<th>Se unio en</th>
							<th></th>
						</tr>
						<?php foreach($site_admins as $admin): ?>
							<tr>
								<td><?php echo $admin['name']; ?></td>
								<td><?php echo $admin['last_name']; ?></td>
								<td><?php echo $admin['email']; ?></td>
								<td><?php echo date("d/m/Y", $admin['time_joined']); ?></td>
								<td>
									<i class="fa fa-edit" title="Editar Administrador" style="color: blue; cursor: pointer"></i>&nbsp;&nbsp;
									<i class="fa fa-close" title="Eliminar Administrador" style="color: red; cursor: pointer"></i>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_new_admin" style="margin-top: 15px;">
						<i class="fa fa-plus"></i> Agregar Administrador
					</button>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php elseif( isset($_GET['charge_data']) && !isset($_GET['products']) ): ?>
			Paypal API Keys
		<?php elseif( isset($_GET['products']) && !isset($_GET['charge_data']) ): ?>
			Show products
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
		sdada
	</div>
</div>

<!-- New Admin Modal -->
<div class="modal fade" id="modal_new_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Agregar Administrador</h4>
      </div>
      <div class="modal-body">
	      <div class="row">
	      	<div class="col-lg-6 col-md-6 col-sm-6">
	      		<p style="margin-top: 15px; margin-bottom: 0px;"><b>Nombre(s)</b></p>
	        	<input type="text" class="form-control txtNewAdminName" placeholder="Nombre(s)" />
	      	</div>
	      	<div class="col-lg-6 col-md-6 col-sm-6">
	      		<p style="margin-top: 15px; margin-bottom: 0px;"><b>Apellido(s)</b></p>
	        	<input type="text" class="form-control txtNewAdminLastName" placeholder="Apellido(s)" />
	      	</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
		      	<p style="margin-top: 15px; margin-bottom: 0px;"><b>Correo Electronico</b></p>
		        <input type="text" class="form-control txtNewAdminEmail" placeholder="Correo Electronico" />
		        <p style="margin-top: 15px; margin-bottom: 0px;"><b>Contrase&ntilde;a</b></p>
		        <input type="password" class="form-control txtNewAdminPass" placeholder="Contrase&ntilde;a" />
		        <p style="margin-top: 15px; margin-bottom: 0px;"><b>Confirmar Contrase&ntilde;a</b></p>
		        <input type="password" class="form-control txtNewAdminPassConfirm" placeholder="Confirmar Contrase&ntilde;a" />
	      		
	      		<div class="checkbox">
	      			<label>
			    		<input type="checkbox" class="chkShowPass"> Ense&ntilde;ar Contrase&ntilde;a
			    	</label>
			    </div>
	      	</div>
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>