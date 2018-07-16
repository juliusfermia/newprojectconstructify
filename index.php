<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Constructify.ph</title>
		<link rel="shortcut icon" href="assets/dist/img/favicon.ico" type="image/x-icon">
		<script src="assets/plugins/ajax.googleapis.com/webfont.js"></script>
		<script>
			WebFont.load({
				google: {families: ['Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i']},
				active: function () {
					sessionStorage.fonts = true;
				}
			});
		</script>
		<!-- START GLOBAL MANDATORY STYLE -->
		<link href="assets/dist/css/base.css" rel="stylesheet" type="text/css">
		<!-- START PAGE LABEL PLUGINS --> 
		<link href="assets/plugins/toastr/toastr.min.css" rel=stylesheet type="text/css"/>
		<link href="assets/plugins/emojionearea/emojionearea.min.css" rel=stylesheet type="text/css"/>
		<link href="assets/plugins/monthly/monthly.min.css" rel=stylesheet type="text/css"/>
		<link href="assets/plugins/amcharts/export.css" rel=stylesheet type="text/css"/>
		
		<!-- START THEME LAYOUT STYLE -->
		<link href="assets/dist/css/style.css" rel="stylesheet" type="text/css"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122024108-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-122024108-1');
		</script>

	</head>
	<body class="hold-transition fixed sidebar-mini">
		
		<!-- Site wrapper -->
		<div class="wrapper">
		
			<!-- Content Wrapper. Contains page content -->
			<?php
				include "header.php";
			?>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->
				<div class="content">
					<div class="preloader"></div>
					<?php
						include "dashboard.php";
					?>
				</div>
			</div>

			<?php
				include "footer.php";
			?>
		</div> <!-- ./wrapper -->

	</body>

<!-- Mirrored from adminpix.thememinister.com/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jul 2018 10:26:38 GMT -->
</html>