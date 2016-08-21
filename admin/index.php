<?php require '../res/php/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1" />
    <meta name="theme-color" content="<?php echo $site_details['site_theme']; ?>" />
	<title>Admin Panel - <?php echo $site_details['site_name']; ?></title>

	<link rel="stylesheet" href="<?php echo ROOT_IP; ?>res/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo ROOT_IP; ?>res/css/bootstrap/css/bootstrap-theme.min.css" />
    <script src="https://use.fontawesome.com/3a5ef39051.js"></script>
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
			<?php endif; ?>
		</style>
    <?php endif; ?>
</head>
<body>
	<?php require_once ROOT_DIR . 'views/nav.php'; ?>
	<div class="container-fluid">
		<?php if(!isset($_SESSION['admin']) && !isset($_COOKIE['admin'])): ?>
			<?php require_once ROOT_DIR . 'views/admin_login.php'; ?>
		<?php else: ?>
			<?php require_once ROOT_DIR . 'views/admin.php'; ?>
		<?php endif; ?>
	</div>
	<?php require_once ROOT_DIR . 'views/footer.php'; ?>
	
<script src="<?php echo ROOT_IP; ?>res/js/jquery.js"></script>
<script src="<?php echo ROOT_IP; ?>res/css/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_IP; ?>res/js/main.js"></script>

<?php if(isset($_SESSION['admin']) || isset($_COOKIE['admin'])): ?>
	<script>
		$('.helpLogo').tooltip();
	</script>
<?php endif; ?>
</body>
</html>