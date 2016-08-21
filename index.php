<?php require 'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1" />
    <meta name="theme-color" content="<?php echo $site_details['site_theme']; ?>" />
	<title><?php echo $site_details['site_name']; ?></title>

	<link rel="stylesheet" href="<?php echo ROOT_IP; ?>res/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo ROOT_IP; ?>res/css/bootstrap/css/bootstrap-theme.min.css" />
    <!--<script src="https://use.fontawesome.com/3a5ef39051.js"></script>-->
    <link rel="stylesheet" href="<?php echo ROOT_IP; ?>res/css/main.css">

    <?php if($site_details['site_theme'] !== 'blue'): ?>
		<style>
			.navbar > .container-fluid,
			.btnMenuToggle,
			footer{
				background-color: <?php echo $site_details['site_theme']; ?>;
			}

			.cmbCategorias,
			.txtSearchBar{
				color: <?php echo $site_details['site_theme']; ?>;
			}

			.txtSearchBar{
				border: 1px solid #ccc;
			}

			.txtSearchBar:focus{
				outline: none;
			    border-color: <?php echo $site_details['site_theme']; ?>;
			    box-shadow: 0 0 5px <?php echo $site_details['site_theme']; ?>;
			}

			<?php if($site_details['site_nav_letters'] !== '1'): ?>
				.buttonsNav *,
				.contactLinkTop,
				.navbar-brand,
				.cmbCategorias,
				.txtSearchBar,
				.btnMenuToggle,
				footer{
					color: #333 !important;
				}

				.phoneTop{
					color: #ccc !important;
				}

				.navbar-brand{
					color: #ccc !important;
				}
			<?php endif; ?>
		</style>
    <?php endif; ?>
</head>
<body>
	<?php require_once ROOT_DIR . 'views/nav.php'; ?>
	<div class="container">
		<?php if(isset($_GET['prod_id']) && !empty($_GET['prod_id'])): ?>
			<?php //require_once ROOT_DIR . 'views/product.php'; ?>
			<?php echo $_GET['prod_id']; ?>
		<?php else: ?>
			<?php require_once ROOT_DIR . 'views/home.php'; ?>
		<?php endif; ?>
	</div>
	<?php require_once ROOT_DIR . 'views/footer.php'; ?>
	
<script src="<?php echo ROOT_IP; ?>res/js/jquery.js"></script>
<script src="<?php echo ROOT_IP; ?>res/css/bootstrap/js/bootstrap.min.js"></script>
<script src="res/js/main.js"></script>
</body>
</html>