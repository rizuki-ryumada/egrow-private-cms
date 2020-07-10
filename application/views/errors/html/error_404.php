<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>

<!-- HEAD -->
<!-- icon -->
<link rel="stylesheet" href="../../../assets/vendor/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
<!-- plugins -->
<link rel="stylesheet" href="../../../assets/vendor/node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- overlay scrollbar -->
<link rel="stylesheet" href="../../../assets/vendor/node_modules/overlayscrollbars/css/OverlayScrollbars.min.css">
<!-- admin lte FRAMEWORK STYLES -->
<link rel="stylesheet" href="../../../assets/vendor/node_modules/admin-lte/dist/css/adminlte.min.css">

<!-- font and default settings -->
<link rel="stylesheet" href="../../../assets/fonts/font-face.css">

<!-- custom login styles -->
<link rel="stylesheet" href="../../../assets/css/backend/login_styles.css">

<!-- /HEAD -->
</head>
<body>
	<!-- Main content -->
	<section class="content">
		<div class="error-page">
			<h2 class="headline <?php 
			if($status_code < 500){
				echo"text-warning";
			} else {
				echo"text-danger";
			}
			?>"><?= $status_code; ?></h2>
			
			<div class="error-content">
				<h3><i class="fas fa-exclamation-triangle <?php 
					if($status_code < 500){
						echo"text-warning";
					} else {
						echo"text-danger";
					}
					?>"></i> <?= $heading; ?>.
				</h3>
					
					<?= $message; ?>
			</div><!-- /.error-content -->
		</div><!-- /.error-page -->
	</section><!-- /.content -->
	
	
		<!-- <div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div> -->
</body>
</html>