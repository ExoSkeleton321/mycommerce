<div class="row topMainBar">
	<div class="col-lg-3 col-md-3 col-sm-3 btnMenuToggle">
		<i class="fa fa-bars"></i> MENU
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9">
		<select class="cmbCategorias">
			<optgroup label="Categorias">
				<option value="0"><b>Todas las categorias</b></option>
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category['category_id']; ?>"><?php echo $category['category']; ?></option>
				<?php endforeach; ?>
			</optgroup>
		</select>
		<input type="search" class="txtSearchBar" placeholder="Buscar...">
		<p class="btnSearch"><i class="fa fa-search"></i> Buscar</p>
		<p class="btnAccount"><i class="fa fa-user"></i></p>
	</div>
</div>
<div class="row bannerTop" style="margin-top: 15px;">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 hideMobile" style="padding: 0;">
		<div class="panel panel-default">
			<div class="panel-heading" style="color: #aaa">
				<h3 class="panel-title"><b>Categorias</b></h3>
			</div>
			<div class="panel-body">
				<ul class="categoryList">
					<?php 
						//Get first 5 items of php randomized array
						shuffle($categories);
						$categoriesLeft = array_slice($categories, 0, 5);
						
						foreach($categoriesLeft as $category): ?>
							<li><a href="category/<?php echo $category['category_id']; ?>"><?php echo $category['category']; ?></a></li>
					<?php 
						endforeach; 
					?>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8 hidden-xs">
		<div class="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="images/slider/1.png" alt="Slider 1">
			      <div class="carousel-caption">
			        Slider 1
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slider/1.png" alt="Slider 2">
			      <div class="carousel-caption">
			        Slider 2
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>-->
			</div>
		</div>
	</div>
</div>

<div class="row	newestProducts">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>
			<label class="labelRecentProducts">Los Mejores Productos</label>
			<div class="controlsNewestProducts">
				<i class="fa fa-arrow-left" href="#mejoresCarousel" data-slide="prev"></i>&nbsp;
				<i class="fa fa-arrow-right" href="#mejoresCarousel" data-slide="next"></i>
			</div>
			<p class="clearfix"></p>
		</h4>
		<div id="mejoresCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php for($i = 1; $i <= 2; $i++): ?>
			        <div class="item <?php if($i == 1){ echo "active"; } ?>">
			            <div class="row">
							<?php for($i = 1; $i <= 3; $i++): ?>
								<div class="col-sm-4 col-xs-6">
					                <div class="col-item">
					                    <div class="photo">
					                        <img src="images/uploads/1.jpg" class="img-responsive" alt="a" />
					                    </div>
					                    <div class="info">
					                        <div class="row">
					                            <div class="price col-md-6">
					                                <h5>
					                                    Celular LG G5</h5>
					                                <h5 class="price-text-color">
					                                    $11,999.99</h5>
					                            </div>
					                            <div class="rating hidden-sm col-md-6">
					                            </div>
					                        </div>
					                        <hr style="border-top: 1px solid #ccc; margin-top: 5px; margin-bottom: 5px;">
					                        <div class="separator clear-left">
		                                        <p class="btn btn-add">
		                                            <i class="fa fa-shopping-cart"></i> <a href="#" class="hidden-sm">Agregar al carrito</a>
		                                        </p>
		                                        <p class="btn btn-details">
		                                            <i class="fa fa-list"></i> <a href="#" class="hidden-sm">Ver Mas</a>
		                                        </p>
		     								</div>
		                                    <div class="clearfix"></div>
					                    </div>
					                </div>
					            </div>
							<?php endfor; ?>
						</div>
					</div>

					<div class="item carouselItem">
			            <div class="row">
							<?php for($i = 1; $i <= 3; $i++): ?>	
								<div class="col-sm-4 col-xs-6">
					                <div class="col-item">
					                    <div class="photo">
					                        <img src="images/uploads/2.jpg" class="img-responsive" alt="a" />
					                    </div>
					                    <div class="info">
					                        <div class="row">
					                            <div class="price col-md-6">
					                                <h5>
					                                    Samsung Galaxy S7 Edge</h5>
					                                <h5 class="price-text-color">
					                                    $15,999.99</h5>
					                            </div>
					                            <div class="rating hidden-sm col-md-6">
					                            </div>
					                        </div>
					                        <hr style="border-top: 1px solid #ccc; margin-top: 5px; margin-bottom: 5px;">
					                        <div class="separator clear-left">
		                                        <p class="btn btn-add">
		                                            <i class="fa fa-shopping-cart"></i> <a href="#" class="hidden-sm">Agregar al carrito</a>
		                                        </p>
		                                        <p class="btn btn-details">
		                                            <i class="fa fa-list"></i> <a href="#" class="hidden-sm">Ver Mas</a>
		                                        </p>
		     								</div>
		                                    <div class="clearfix"></div>
					                    </div>
					                </div>
					            </div>
					        <?php endfor; ?>
							
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>

<div class="row	newestProducts">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<h4>
			<label class="labelRecentProducts">Productos Recientes</label>
			<div class="controlsNewestProducts">
				<i class="fa fa-arrow-left" href="#recientesCarousel" data-slide="prev"></i>&nbsp;
				<i class="fa fa-arrow-right" href="#recientesCarousel" data-slide="next"></i>
			</div>
			<p class="clearfix"></p>
		</h4>
		<div id="recientesCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php for($i = 1; $i <= 2; $i++): ?>
			        <div class="item <?php if($i == 1){ echo "active"; } ?>">
			            <div class="row">
							<?php for($i = 1; $i <= 3; $i++): ?>
								<div class="col-sm-4 col-xs-6">
					                <div class="col-item">
					                    <div class="photo">
					                        <img src="images/uploads/2.jpg" class="img-responsive" alt="a" />
					                    </div>
					                    <div class="info">
					                        <div class="row">
					                            <div class="price col-md-6">
					                                <h5>
					                                    Samsung Galaxy S7 Edge</h5>
					                                <h5 class="price-text-color">
					                                    $15,999.99</h5>
					                            </div>
					                            <div class="rating hidden-sm col-md-6">
					                            </div>
					                        </div>
					                        <hr style="border-top: 1px solid #ccc; margin-top: 5px; margin-bottom: 5px;">
					                        <div class="separator clear-left">
		                                        <p class="btn btn-add">
		                                            <i class="fa fa-shopping-cart"></i> <a href="#" class="hidden-sm">Agregar al carrito</a>
		                                        </p>
		                                        <p class="btn btn-details">
		                                            <i class="fa fa-list"></i> <a href="#" class="hidden-sm">Ver Mas</a>
		                                        </p>
		     								</div>
		                                    <div class="clearfix"></div>
					                    </div>
					                </div>
					            </div>
							<?php endfor; ?>
						</div>
					</div>

					<div class="item carouselItem">
			            <div class="row">
							<?php for($i = 1; $i <= 3; $i++): ?>	
								<div class="col-sm-4 col-xs-6">
					                <div class="col-item">
					                    <div class="photo">
					                        <img src="images/uploads/1.jpg" class="img-responsive" alt="a" />
					                    </div>
					                    <div class="info">
					                        <div class="row">
					                            <div class="price col-md-6">
					                                <h5>
					                                    LG G5</h5>
					                                <h5 class="price-text-color">
					                                    $11,999.99</h5>
					                            </div>
					                            <div class="rating hidden-sm col-md-6">
					                            </div>
					                        </div>
					                        <hr style="border-top: 1px solid #ccc; margin-top: 5px; margin-bottom: 5px;">
					                        <div class="separator clear-left">
		                                        <p class="btn btn-add">
		                                            <i class="fa fa-shopping-cart"></i> <a href="#" class="hidden-sm">Agregar al carrito</a>
		                                        </p>
		                                        <p class="btn btn-details">
		                                            <i class="fa fa-list"></i> <a href="#" class="hidden-sm">Ver Mas</a>
		                                        </p>
		     								</div>
		                                    <div class="clearfix"></div>
					                    </div>
					                </div>
					            </div>
					        <?php endfor; ?>
							
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>

<!-- New User Modal -->
<div class="modal fade" id="modal_new_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Registrarme</h4>
      </div>
      <div class="modal-body">
	      <div class="row">
	      	<div class="col-lg-6 col-md-6 col-sm-6">
	      		<p style="margin-top: 15px; margin-bottom: 0px;"><b>Nombre(s)</b></p>
	        	<input type="text" class="form-control txtNewUserName" placeholder="Nombre(s)" />
	      	</div>
	      	<div class="col-lg-6 col-md-6 col-sm-6">
	      		<p style="margin-top: 15px; margin-bottom: 0px;"><b>Apellido(s)</b></p>
	        	<input type="text" class="form-control txtNewUserLastName" placeholder="Apellido(s)" />
	      	</div>
	      	<div class="col-lg-12 col-md-12 col-sm-12">
	      		<p style="margin-top: 15px; margin-bottom: 15px;"><b>Direcci&oacute;n</b></p>
	      		<p style="margin-bottom: 0px;"><b>Calle y Numero</b></p>
	        	<input type="text" class="form-control txtNewUserStreet" placeholder="Calle y Numero" />
	      		<div class="row" style="margin-top: 15px;">
	      			<div class="col-lg-4 col-md-4 col-sm-4">
	      				<select class="form-control txtNewUserState">
	      					<option value="1">-- Estado --</option>
	      				</select>
	      			</div>
	      			<div class="col-lg-4 col-md-4 col-sm-4">
	      				<select class="form-control txtNewUserCity">
	      					<option value="1">-- Ciudad --</option>
	      				</select>
	      			</div>	
	      			<div class="col-lg-4 col-md-4 col-sm-4">
	      				<select class="form-control txtNewUserLocal">
	      					<option value="1">-- Localidad --</option>
	      				</select>
	      			</div>
	      			<div class="col-lg-4 col-md-4 col-sm-4">
	      				<input type="number" class="form-control txtNewUserCP" placeholder="Codigo Postar" maxlength="5" style="margin-top: 15px;">
	      			</div>
	      		</div>
	      	</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
		      	<p style="margin-top: 15px; margin-bottom: 0px;"><b>Correo Electronico</b></p>
		        <input type="text" class="form-control txtNewUserEmail" placeholder="Correo Electronico" />
		        <p style="margin-top: 15px; margin-bottom: 0px;"><b>Contrase&ntilde;a</b></p>
		        <input type="password" class="form-control txtNewUserPass" placeholder="Contrase&ntilde;a" />
		        <p style="margin-top: 15px; margin-bottom: 0px;"><b>Confirmar Contrase&ntilde;a</b></p>
		        <input type="password" class="form-control txtNewUserPassConfirm" placeholder="Confirmar Contrase&ntilde;a" />
	      		
	      		<div class="checkbox">
	      			<label>
			    		<input type="checkbox" class="chkShowPass"> Ense&ntilde;ar Contrase&ntilde;a
			    	</label>
			    </div>
	      	</div>
	      </div>
      </div>
      <div class="modal-footer">
      	<span class="user_status_log"></span>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btnRegisterUser">Registrarme</button>
      </div>
    </div>
  </div>
</div>