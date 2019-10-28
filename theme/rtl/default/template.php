<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="javascript: void(0);">
		
		<title>Session 16</title>
		<!-- به ادرس های اصلی لینک میریم -->
		<link href="<?php echo $template_url; ?>css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo $template_url; ?>css/main.css" rel="stylesheet">
		
		<script type="text/javascript" src="<?php echo $template_url; ?>js/jquery-1.8.2.min.js" ></script>
		<script type="text/javascript" src="<?php echo $template_url; ?>js/bootstrap.min.js" ></script>
		
		<script type="text/javascript" src="<?php echo $template_url; ?>js/script.js" ></script>
		
	</head>
	<body>
    <div class="container">
        <header>
            <?php include ($template_url.'pages/header.php'); ?>
            <div class="clearfix"></div>
            <div class="row">
            <?php include ($template_url.'pages/menu.php'); ?>
            </div>
        </header>
<?php
// اگر کاربرمثلا زد  cms/?m و یا  cms/?m=contact  برو به صفحه کانتکت

$page = 'default';
if( isset( $_GET['m'] ) && $_GET['m'] == 'contact' ) $page = 'contact';
if(isset($_GET['m'])&&$_GET['m']=='search')$page='search';
if(isset($_GET['m'])&&$_GET['m']=='product')$page='product';
if(isset($_GET['m'])&&$_GET['m']=='shop')$page='shop';
if(isset($_GET['m'])&&$_GET['m']=='register')$page='register';
if(isset($_GET['m'])&&$_GET['m']=='confirm')$page='confirm';
if(isset($_GET['m'])&&$_GET['m']=='login')$page='login';
// آأرس صفحه  contact
include( $template_url.'pages/'.$page.'.php' );
?>


    </div>

	</body>
</html>