<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="container" style="height: 100px;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavbar" aria-expanded="false">
          <span class="sr-only">Abrir navegaci&oacute;n</span>
          <span class="icon-bar""></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo ROOT_HOST; //Change to ROOT_HOST when site is uploaded. ?>">
          <?php if(file_exists("images/logo.png") || file_exists("../images/logo.png")): ?>
            <img src="<?php echo ROOT_HOST; ?>images/logo.png" class="logoImg" style="display: inherit;" alt="<?php echo $site_details['site_name']; ?> Logo" />
          <?php else: ?>
            <?php echo $site_details['site_name']; ?>
          <?php endif; ?>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse hidden-xs" id="mainNavbar">
        <div class="nav navbar-nav navbar-right">
          <p style="line-height: 50px; margin-bottom: 0; text-align: right;">
            <span style="font-weight: bold;" class="contactLinkTop">
              <i class="fa fa-phone"></i> CONTACTO · 
            </span>
            <span style="font-weight: bold;" class="phoneTop">
              <?php echo $site_details['site_phone']; ?>
            </span>
          </p>
          <p class="buttonsNav">
            <?php if(!isset($_SESSION['admin'])): ?>
              <span>
                ($)MXN&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-down btnCurrency"></i> | <a href="#">MI CARRITO (0)</a> | <a href="#">CONTACTO</a> | 
                
                <?php if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])): ?>
                  <a href="#" data-toggle="modal" data-target="#modal_new_user">REGISTRARME</a>
                <?php else: ?>
                  <a href="#">MI CUENTA</a>
                <?php endif; ?>
              </span>
            <?php else: ?>
              <span>
                <a href="<?php echo ROOT_HOST; ?>admin"><i class="fa fa-list"></i> Admin Panel</a> | 
                <a href="<?php echo ROOT_HOST; ?>" target="_blank"><i class="fa fa-eye"></i> Ver Sitio</a> | 
                <a href="<?php echo ROOT_HOST; ?>logout"><i class="fa fa-sign-out"></i>Salir</a>
              </span>
            <?php endif; ?>
          </p>
        </div>
      </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
</nav>