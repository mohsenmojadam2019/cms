<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="javascript: void(0);">
		
		<title>Session 14</title>
		
		<link href="<?php echo $template_url; ?>css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo $template_url; ?>css/main.css" rel="stylesheet">
		
		<script type="text/javascript" src="<?php echo $template_url; ?>js/jquery-1.8.2.min.js" ></script>
		<script type="text/javascript" src="<?php echo $template_url; ?>js/bootstrap.min.js" ></script>
		
		<script type="text/javascript" src="<?php echo $template_url; ?>js/script.js" ></script>
		
	</head>
	<body>

		<div class="container">

			<header>
			
				<?php include( $template_url.'pages/header.php' ); ?>
				
				<div class="clearfix"></div>
				
				<div class="row">
				
					<?php include( $template_url.'pages/menu.php' ); ?>
				
				</div>
			
			</header>

<?php
$page = 'default';
if( isset( $_GET['m'] ) && $_GET['m'] == 'contact' ) $page = 'contact';
if( isset( $_GET['m'] ) && $_GET['m'] == 'search' ) $page = 'search';
if( isset( $_GET['m'] ) && $_GET['m'] == 'product' ) $page = 'product';
if( isset( $_GET['m'] ) && $_GET['m'] == 'shop' ) $page = 'shop';
if( isset( $_GET['m'] ) && $_GET['m'] == 'register' ) $page = 'register';
if( isset( $_GET['m'] ) && $_GET['m'] == 'confirm' ) $page = 'confirm';
if( isset( $_GET['m'] ) && $_GET['m'] == 'login' ) $page = 'login';
if( isset( $_GET['m'] ) && $_GET['m'] == 'panel' ) $page = 'panel';
if( isset( $_GET['m'] ) && $_GET['m'] == 'logout' ) $page = 'logout';


include( $template_url.'pages/'.$page.'.php' );
?>




		</div>

	</body>
</html>