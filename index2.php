<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from adminpix.thememinister.com/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jul 2018 10:23:07 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>AdminPix</title>
		<link rel="shortcut icon" href="assets/dist/img/favicon.png" type="image/x-icon">
		<script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
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
	</head>
	<body class="fixed">
	   
		<!-- Preloader -->
		<div class="preloader"></div>   
	
		<!-- Site wrapper -->
		<div class="wrapper">
			<header class="main-header"> 
				<a href="index-2.html" class="logo"> <!-- Logo -->
					<span class="logo-lg">
						<!--<b>Admin</b>H-admin-->
						<img src="assets/dist/img/logo.png" alt="img" width="170">
					</span>
				</a>
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top">
					<a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
						<span class="sr-only">Toggle navigation</span>
						<span class="ti-menu-alt"></span>
					</a>
					<div class="menu-tab">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="material-ripple">Home</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" class="material-ripple">Profile</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" class="material-ripple">Messages</a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" class="material-ripple">Settings</a></li>
						</ul>
					</div>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="hidden-sm hidden-xs">
								<form class="navbar-form hidden-xs" role="search">
									<div class="input-group add-on">
										<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="ti-search"></i></button>
										</div>
									</div>
								</form>
							</li>
							<li class="dropdown dropdown-settings">
								<a href="#" class="dropdown-toggle bubbly-button" data-toggle="dropdown"> <i class="fa fa-bell-o"></i><span class="badge fadeAnim">2</span></a>
								<div class="notification-box dropdown-menu animated bounceIn">
									<div class="notification-header">
										<h4>2 new notifications</h4>
										<a href="#">clear all</a>
									</div>
									<div class="notification-body">
										<ul class="notification_inner">
											<li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-commenting"></i>
												 </div>
												 <div class="notification-txt">
													<h4>3 new comments</h4>
													<span>40 seconds ago</span>
												 </div>
											  </a>
											</li>
											<li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-envelope-o"></i>
												 </div>
												 <div class="notification-txt">
													<h4>You have received 1 email</h4>
													<span>5 minutes ago</span>
												 </div>
											  </a>
										   </li>
										   <li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-usd"></i>
												 </div>
												 <div class="notification-txt">
													<h4>You have transferred $50</h4>
													<span>8 minutes ago</span>
												 </div>
											  </a>
										   </li>
										   <li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-thumbs-up"></i>
												 </div>
												 <div class="notification-txt">
													<h4>Someone likes your post</h4>
													<span>13 minutes ago</span>
												 </div>
											  </a>
										   </li>
										   <li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-ban "></i>
												 </div>
												 <div class="notification-txt">
													<h4>Someone banned your post</h4>
													<span>20 minutes ago</span>
												 </div>
											  </a>
										   </li>
										   <li>
											  <a href="#" class="single-notification">
												 <div class="notification-img">
													<i class="fa fa-trash"></i>
												 </div>
												 <div class="notification-txt">
													<h4>Someone deleted your post</h4>
													<span>36 minutes ago</span>
												 </div>
											  </a>
										   </li>
										</ul>
									</div>
									<div class="notification-footer">
										<a href="#">see all notification<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</li>
							<li class="dropdown dropdown-settings">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-email"></i><span class="badge fadeAnim">3</span></a>
								<div class="dropdown-menu msg_box">
									<div class="message-header">
										<h4>3 new messages</h4>
									</div>
									<div class="message-body">
										<div class=message_inner2>
											<div class=message_widgets>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Farzana Yasmin</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status available pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Mubin Khan</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status away pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Mozammel Hoque</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status busy pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Tanzil Ahmed</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm  available...</p>
														<span class="profile-status offline pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Amir Khan</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status available pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Salman Khan</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status available pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Farzana Yasmin</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status available pull-right"></span>
													</div>
												</a>
												<a href="#">
													<div class=inbox-item>
														<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
														<strong class=inbox-item-author>Tanzil Ahmed</strong>
														<span class=inbox-item-date>-13:40 PM</span>
														<p class=inbox-item-text>Hey! there I'm available...</p>
														<span class="profile-status offline pull-right"></span>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="message-footer">
										<a href="#">see all messages<i class="fa fa-long-arrow-right"></i></a>
									 </div>
								</div>
							</li>
							<li class="dropdown dropdown-settings">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-menu"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Superadmin</a></li>
									<li><a href="#">Admin</a></li>
									<li><a href="#">HR</a></li>
									<li><a href="#">Manager</a></li>
									 
									<li><a href="#">HMIS</a></li>
									<li><a href="#">Inventory</a></li>
									<li><a href="#">Child</a></li>
									<li><a href="#">Family</a></li>
									<li><a href="#">Education</a></li>
									<li><a href="#">CAP</a></li>
									<li><a href="#">DV</a></li>
									<li><a href="#">Report</a></li>
								</ul>
							</li>
							<li class="dropdown dropdown-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-user"></i></a>
								<ul class="dropdown-menu">
									<li><a href="profile.html"><i class="ti-user"></i> User Profile</a></li>
									<li><a href="#"><i class="ti-settings"></i> Settings</a></li>
									<li><a href="login.html"><i class="ti-key"></i> Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<ol class="breadcrumb hidden-xs">
							<li><a href="#">Superadmin</a></li>
							<li><a href="#">Manage</a></li>
							<li><a href="#">Site Manage</a></li>
							<li class="active">Util Objects</li>
						</ol>
						<aside class="main-sidebar">
							<!-- sidebar -->
							<div class="sidebar">
								<!-- sidebar menu -->
								<ul class="sidebar-menu">
									<li class="active treeview">
										<a href="index-2.html">
											<i class="ti-home"></i><span>Dashboard</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="index-2.html">Dashboard One</a></li>
											<li class="active"><a href="index2.html">Dashboard Two</a></li>
											<li><a href="index3.html">Dashboard Three</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-pencil-alt"></i> <span>Forms</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="forms_basic.html">Basic Forms</a></li>
											<li><a href="forms_validation.html">Validation Forms</a></li>
											<li><a href="form_input_group.html">Input Group</a></li>
											<li><a href="form_mask.html">Form Mask</a></li>
											<li><a href="form_select.html">Select</a></li>
											<li><a href="form_touchspin.html">Touchspin</a></li>
											<li><a href="forms_cropper.html">Cropper</a></li>
											<li><a href="forms_editor_ck.html">CK Editor</a></li>
											<li><a href="forms_editor_summernote.html">Summernote</a></li>
											<li><a href="forms_editor_markdown.html">Markdown</a></li>
											<li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
											<li><a href="forms_wysihtml5.html">Wysihtml5</a></li>
											<li>
												<a href="#">Form Wizard
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="form_wizard.html">Wizard One</a></li>
													<li><a href="form_wizard2.html">Wizard Two</a></li>
													<li><a href="form_wizard3.html">Wizard Three</a></li>
													<li><a href="form_wizard4.html">Wizard Four</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-notepad"></i> <span>Table</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="table.html">Simple Table</a></li>
											<li><a href="data-table.html">Data Table</a></li>
											<li><a href="footable.html">Foo Table</a></li>
											<li><a href="x-editable.html">X-Editable</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-sort-alpha-desc"></i> <span>UI Elements</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="typography.html">Typography</a></li>
											<li><a href="button.html">Buttons</a></li>
											<li><a href="notification.html">Notification</a></li>
											<li><a href="panels.html">Panels</a></li>
											<li><a href="tabs.html">Tab</a></li>
											<li><a href="modals.html">Modals</a></li>
											<li><a href="progressbars.html">Progressber</a></li>
											<li><a href="list.html">List View</a></li>
											<li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
											<li><a href="label-badge-alert.html">labels, Badges</a></li>
											<li><a href="treeview.html">Tree View</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-bar-chart"></i> <span>Charts</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="chart-float.html">Float Chart</a></li>
											<li><a href="chart_morris.html">Morris Chart</a></li>
											<li><a href="charts_js.html">Chart JS</a></li>
											<li><a href="charts_am.html">Am Chart</a></li>
											<li><a href="charts_sparklin.html">Chart Sparklin</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-font-awesome"></i> <span>Icons</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="icons-bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
											<li><a href="icons-fontawesome.html"><i class="fa fa-font-awesome"></i>Fontawesome</a></li>
											<li><a href="icons-flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
											<li><a href="icons-material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
											<li><a href="icons-weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
											<li><a href="icons-line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
											<li><a href="icons-pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
											<li><a href="icons-socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-location-pin"></i> <span>Maps</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="maps_amcharts.html">Amcharts Maps</a></li>
											<li><a href="maps_gmaps.html">Maps Gmaps</a></li>
											<li><a href="maps_data.html">Data Maps</a></li>
											<li><a href="maps_jvector.html">Jvector Maps</a></li>
											<li><a href="maps_google.html">Google map</a></li>
											<li><a href="maps_snazzy.html">Snazzy Map</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-email"></i> <span>Mailbox</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="mailbox.html">Mailbox</a></li>
											<li><a href="maildetails.html">Mailbox Details</a></li>
											<li><a href="compose.html">Compose</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-mobile"></i> <span>App View</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="invoice.html">Invoice</a></li>
											<li><a href="timeline.html">Vertical timeline</a></li>
											<li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
											<li><a href="pricing.html">Pricing Table</a></li>
											<li><a href="slider.html">Slider</a></li>
											<li><a href="carousel.html">Carousel</a></li>
											<li><a href="code_editor.html">Code editor</a></li>
											<li><a href="gridSystem.html">Grid System</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-agenda"></i><span>Other pages</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="profile.html">Profile</a></li>
											<li><a href="forget_password.html">Forget password</a></li>
											<li><a href="lockscreen.html">Lockscreen</a></li>
											<li><a href="404.html">404 Error</a></li>
											<li><a href="505.html">505 Error</a></li>
										</ul>
									</li>
									<li><a href="calender.html"><i class="fa fa-calendar"></i><span>Calender</span></a></li>
									<li><a href="blank.html"><i class="fa fa-file-o"></i><span>Blank Page</span></a></li>
									<li class="treeview">
										<a href="#">
											<i class="ti-direction-alt"></i> <span>Multilevel</span>
											<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
										</a>
										<ul class="treeview-menu">
											<li><a href="#">Level One</a></li>
											<li>
												<a href="#">Level One
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="#"> Level Two</a></li>
													<li>
														<a href="#">Level Two
															<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
														</a>
														<ul class="treeview-menu">
															<li><a href="#">Level Three</a></li>
															<li><a href="#">Level Three</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Level One</a></li>
										</ul>
									</li>
								</ul>
							</div> <!-- /.sidebar -->
						</aside>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<ul class="breadcrumb hidden-xs">
							<li><a href="#">Manage</a></li>
							<li><a href="#">Superadmin</a></li>
							<li class="active">Util Objects</li>
						</ul>
						<aside class="main-sidebar">
							<!-- sidebar -->
							<div class="sidebar">
								<!-- sidebar menu -->
								<ul class="sidebar-menu">
									<li class="active treeview">
										<a href="index-2.html">
											<i class="ti-home"></i><span>Dashboard</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="index-2.html">Dashboard One</a></li>
											<li class="active"><a href="index2.html">Dashboard Two</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-notepad"></i> <span>Table</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="table.html">Simple Table</a></li>
											<li><a href="data-table.html">Data Table</a></li>
											<li><a href="footable.html">Foo Table</a></li>
											<li><a href="x-editable.html">X-Editable</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-sort-alpha-desc"></i> <span>UI Elements</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="typography.html">Typography</a></li>
											<li><a href="button.html">Buttons</a></li>
											<li><a href="notification.html">Notification</a></li>
											<li><a href="panels.html">Panels</a></li>
											<li><a href="tabs.html">Tab</a></li>
											<li><a href="modals.html">Modals</a></li>
											<li><a href="progressbars.html">Progressber</a></li>
											<li><a href="list.html">List View</a></li>
											<li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
											<li><a href="label-badge-alert.html">labels, Badges</a></li>
											<li><a href="treeview.html">Tree View</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-bar-chart"></i> <span>Charts</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="chart-float.html">Float Chart</a></li>
											<li><a href="chart_morris.html">Morris Chart</a></li>
											<li><a href="charts_js.html">Chart JS</a></li>
											<li><a href="charts_am.html">Am Chart</a></li>
											<li><a href="charts_sparklin.html">Chart Sparklin</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-email"></i> <span>Mailbox</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="mailbox.html">Mailbox</a></li>
											<li><a href="maildetails.html">Mailbox Details</a></li>
											<li><a href="compose.html">Compose</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-mobile"></i> <span>App View</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="invoice.html">Invoice</a></li>
											<li><a href="timeline.html">Vertical timeline</a></li>
											<li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
											<li><a href="pricing.html">Pricing Table</a></li>
											<li><a href="slider.html">Slider</a></li>
											<li><a href="carousel.html">Carousel</a></li>
											<li><a href="code_editor.html">Code editor</a></li>
											<li><a href="gridSystem.html">Grid System</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-agenda"></i><span>Other pages</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="profile.html">Profile</a></li>
											<li><a href="forget_password.html">Forget password</a></li>
											<li><a href="lockscreen.html">Lockscreen</a></li>
											<li><a href="404.html">404 Error</a></li>
											<li><a href="505.html">505 Error</a></li>
										</ul>
									</li>
									<li><a href="calender.html"><i class="fa fa-calendar"></i>Calender</a></li>
									<li><a href="blank.html"><i class="fa fa-file-o"></i>Blank Page</a></li>
									<li class="treeview">
										<a href="#">
											<i class="ti-direction-alt"></i> <span>Multilevel</span>
											<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
										</a>
										<ul class="treeview-menu">
											<li><a href="#">Level One</a></li>
											<li>
												<a href="#">Level One
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="#"> Level Two</a></li>
													<li>
														<a href="#">Level Two
															<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
														</a>
														<ul class="treeview-menu">
															<li><a href="#">Level Three</a></li>
															<li><a href="#">Level Three</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Level One</a></li>
										</ul>
									</li>
								</ul>
							</div> <!-- /.sidebar -->
						</aside>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages">
						<ol class="breadcrumb hidden-xs">
							<li><a href="#">Site Manage</a></li>
							<li><a href="#">Manage</a></li>
							<li class="active">Superadmin</li>
						</ol>
						<aside class="main-sidebar">
							<!-- sidebar -->
							<div class="sidebar">
								<!-- sidebar menu -->
								<ul class="sidebar-menu">
									<li class="active treeview">
										<a href="index-2.html">
											<i class="ti-home"></i><span>Dashboard</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="index-2.html">Dashboard One</a></li>
											<li class="active"><a href="index2.html">Dashboard Two</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-pencil-alt"></i> <span>Forms</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="forms_basic.html">Basic Forms</a></li>
											<li><a href="forms_validation.html">Validation Forms</a></li>
											<li><a href="form_input_group.html">Input Group</a></li>
											<li><a href="form_mask.html">Form Mask</a></li>
											<li><a href="form_select.html">Select</a></li>
											<li><a href="form_touchspin.html">Touchspin</a></li>
											<li><a href="forms_cropper.html">Cropper</a></li>
											<li><a href="form_file_upload.html">Forms File Upload</a></li>
											<li><a href="forms_editor_ck.html">CK Editor</a></li>
											<li><a href="forms_editor_summernote.html">Summernote</a></li>
											<li><a href="forms_editor_markdown.html">Markdown</a></li>
											<li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
											<li><a href="forms_wysihtml5.html">Wysihtml5</a></li>
											<li>
												<a href="#">Form Wizard
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="form_wizard.html">Wizard One</a></li>
													<li><a href="form_wizard2.html">Wizard Two</a></li>
													<li><a href="form_wizard3.html">Wizard Three</a></li>
													<li><a href="form_wizard4.html">Wizard Four</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-sort-alpha-desc"></i> <span>UI Elements</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="typography.html">Typography</a></li>
											<li><a href="button.html">Buttons</a></li>
											<li><a href="notification.html">Notification</a></li>
											<li><a href="panels.html">Panels</a></li>
											<li><a href="tabs.html">Tab</a></li>
											<li><a href="modals.html">Modals</a></li>
											<li><a href="progressbars.html">Progressber</a></li>
											<li><a href="list.html">List View</a></li>
											<li><a href="icheck_toggle_pagination.html">iCheck, Toggle</a></li>
											<li><a href="label-badge-alert.html">labels, Badges</a></li>
											<li><a href="treeview.html">Tree View</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-bar-chart"></i> <span>Charts</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="chart-float.html">Float Chart</a></li>
											<li><a href="chart_morris.html">Morris Chart</a></li>
											<li><a href="charts_js.html">Chart JS</a></li>
											<li><a href="charts_am.html">Am Chart</a></li>
											<li><a href="charts_sparklin.html">Chart Sparklin</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="fa fa-font-awesome"></i> <span>Icons</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="icons-bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
											<li><a href="icons-fontawesome.html"><i class="fa fa-font-awesome"></i>Fontawesome</a></li>
											<li><a href="icons-flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
											<li><a href="icons-material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
											<li><a href="icons-weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
											<li><a href="icons-line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
											<li><a href="icons-pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
											<li><a href="icons-socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-location-pin"></i> <span>Maps</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="maps_amcharts.html">Amcharts Maps</a></li>
											<li><a href="maps_gmaps.html">Maps Gmaps</a></li>
											<li><a href="maps_data.html">Data Maps</a></li>
											<li><a href="maps_jvector.html">Jvector Maps</a></li>
											<li><a href="maps_google.html">Google map</a></li>
											<li><a href="maps_snazzy.html">Snazzy Map</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-mobile"></i> <span>App View</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="invoice.html">Invoice</a></li>
											<li><a href="timeline.html">Vertical timeline</a></li>
											<li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
											<li><a href="pricing.html">Pricing Table</a></li>
											<li><a href="slider.html">Slider</a></li>
											<li><a href="carousel.html">Carousel</a></li>
											<li><a href="code_editor.html">Code editor</a></li>
											<li><a href="gridSystem.html">Grid System</a></li>
										</ul>
									</li>
									<li><a href="calender.html"><i class="fa fa-calendar"></i>Calender</a></li>
									<li><a href="blank.html"><i class="fa fa-file-o"></i>Blank Page</a></li>
									<li class="treeview">
										<a href="#">
											<i class="ti-direction-alt"></i> <span>Multilevel</span>
											<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
										</a>
										<ul class="treeview-menu">
											<li><a href="#">Level One</a></li>
											<li>
												<a href="#">Level One
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="#"> Level Two</a></li>
													<li>
														<a href="#">Level Two
															<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
														</a>
														<ul class="treeview-menu">
															<li><a href="#">Level Three</a></li>
															<li><a href="#">Level Three</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><a href="#">Level One</a></li>
										</ul>
									</li>
								</ul>
							</div> <!-- /.sidebar -->
						</aside>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings">
						<ol class="breadcrumb hidden-xs">
							<li><a href="#">Superadmin</a></li>
							<li><a href="#">Manage</a></li>
							<li><a href="#">Site Manage</a></li>
							<li class="active">Util Objects</li>
						</ol>
						<aside class="main-sidebar">
							<!-- sidebar -->
							<div class="sidebar">
								<!-- sidebar menu -->
								<ul class="sidebar-menu">
									<li class="active treeview">
										<a href="index-2.html">
											<i class="ti-home"></i><span>Dashboard</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="index-2.html">Dashboard One</a></li>
											<li class="active"><a href="index2.html">Dashboard Two</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-pencil-alt"></i> <span>Forms</span>
											<span class="pull-right-container">
												<i class="fa fa-angle-left pull-right"></i>
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="forms_basic.html">Basic Forms</a></li>
											<li><a href="forms_validation.html">Validation Forms</a></li>
											<li><a href="form_input_group.html">Input Group</a></li>
											<li><a href="form_mask.html">Form Mask</a></li>
											<li><a href="form_select.html">Select</a></li>
											<li><a href="form_touchspin.html">Touchspin</a></li>
											<li><a href="forms_cropper.html">Cropper</a></li>
											<li><a href="form_file_upload.html">Forms File Upload</a></li>
											<li><a href="forms_editor_ck.html">CK Editor</a></li>
											<li><a href="forms_editor_summernote.html">Summernote</a></li>
											<li><a href="forms_editor_markdown.html">Markdown</a></li>
											<li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
											<li><a href="forms_wysihtml5.html">Wysihtml5</a></li>
											<li>
												<a href="#">Form Wizard
													<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
												</a>
												<ul class="treeview-menu">
													<li><a href="form_wizard.html">Wizard One</a></li>
													<li><a href="form_wizard2.html">Wizard Two</a></li>
													<li><a href="form_wizard3.html">Wizard Three</a></li>
													<li><a href="form_wizard4.html">Wizard Four</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-mobile"></i> <span>App View</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="invoice.html">Invoice</a></li>
											<li><a href="timeline.html">Vertical timeline</a></li>
											<li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
											<li><a href="pricing.html">Pricing Table</a></li>
											<li><a href="slider.html">Slider</a></li>
											<li><a href="carousel.html">Carousel</a></li>
											<li><a href="code_editor.html">Code editor</a></li>
											<li><a href="gridSystem.html">Grid System</a></li>
										</ul>
									</li>
									<li class="treeview">
										<a href="#">
											<i class="ti-agenda"></i><span>Other pages</span>  
											<span class="pull-right-container">   
												<i class="fa fa-angle-left pull-right"></i>  
											</span>
										</a>
										<ul class="treeview-menu">
											<li><a href="login.html">Login</a></li>
											<li><a href="register.html">Register</a></li>
											<li><a href="profile.html">Profile</a></li>
											<li><a href="forget_password.html">Forget password</a></li>
											<li><a href="lockscreen.html">Lockscreen</a></li>
											<li><a href="404.html">404 Error</a></li>
											<li><a href="505.html">505 Error</a></li>
										</ul>
									</li>
									<li><a href="calender.html"><i class="fa fa-calendar"></i>Calender</a></li>
									<li><a href="blank.html"><i class="fa fa-file-o"></i>Blank Page</a></li>
								</ul>
							</div> <!-- /.sidebar -->
						</aside>
					</div>
				</div>
			</header>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Main content -->
				<div class="content">
					<div class="row">
						<div class="col-lg-6">
							<div class="panel lobidisable panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Bordered table</h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>#</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Username</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Abdullah</td>
													<td>Bin</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Md</td>
													<td>Salah</td>
													<td>@fat</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Ibrahim</td>
													<td>Hossain</td>
													<td>@twitter</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Mubin</td>
													<td>Khan</td>
													<td>@mubin15</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Ruzel</td>
													<td>Ahmad</td>
													<td>@Ruzeld</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="row stat_area">
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
									<div class="statistic-box dash2">
										<i class="ti-world statistic_icon"></i>
										<div class=small>Social users </div>
										<h2><span class=count-number>789</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
										<div class="sparkline3 text-center"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
									<div class="statistic-box dash2">
										<i class="ti-user statistic_icon"></i>
										<div class=small>Total users</div>
										<h2><span class=count-number>321</span>M <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
										<div class="sparkline1 text-center"></div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-6">
									<div class="statistic-box dash2">
										<i class="ti-bag statistic_icon"></i>
										<div class=small>Total Sales</div>
										<h2><span class=count-number>5489</span>$ <span class=slight><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
										<div class="sparkline4 text-center"></div>
									</div>
								</div>
								<div class="col-xs-6 hidden-sm col-md-3 col-lg-6">
									<div class="statistic-box dash2">
										<i class="ti-server statistic_icon"></i>
										<div class=small>Visitors this Month</div>
										<h2><span class=count-number>696</span>K <span class=slight><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
										<div class="sparkline2 text-center"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 hidden-420">
							<div class="panel panel-bd lobidrag">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Bar chart</h4>
									</div>
								</div>
								<div class="panel-body">
									<canvas id="barChart" height="200"></canvas>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 hidden-420">
							<div class="panel panel-bd lobidrag">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Rader chart</h4>
									</div>
								</div>
								<div class="panel-body">
									<canvas id="radarChart" height="200"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd lobidrag">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>FooTable with row toggler, sorting, filter and pagination </h4>
									</div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<input type="text" class="form-control input-sm m-b-15" id="filter" placeholder="Search in table">
										<table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
											<thead>
												<tr>
													<th>ID</th>
													<th>First Name</th>
													<th>Last Name</th>
													<th>Job Title</th>
													<th>Started On</th>
													<th data-hide="all">Date of Birth</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Dennise</td>
													<td>Fuhrman</td>
													<td>High School History Teacher</td>
													<td>November 8th 2011</td>
													<td>July 25th 1960</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Elodia</td>
													<td>Weisz</td>
													<td>Wallpaperer Helper</td>
													<td>October 15th 2010</td>
													<td>March 30th 1982</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Raeann</td>
													<td>Haner</td>
													<td>Internal Medicine Nurse Practitioner</td>
													<td>November 28th 2013</td>
													<td>February 26th 1966</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Junie</td>
													<td>Landa</td>
													<td>Offbearer</td>
													<td>October 31st 2010</td>
													<td>March 29th 1966</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Solomon</td>
													<td>Bittinger</td>
													<td>Roller Skater</td>
													<td>December 29th 2011</td>
													<td>September 22nd 1964</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Bar</td>
													<td>Lewis</td>
													<td>Clown</td>
													<td>November 12th 2012</td>
													<td>August 4th 1991</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Usha</td>
													<td>Leak</td>
													<td>Ships Electronic Warfare Officer</td>
													<td>August 14th 2012</td>
													<td>November 20th 1979</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Lorriane</td>
													<td>Cooke</td>
													<td>Technical Services Librarian</td>
													<td>September 21st 2010</td>
													<td>April 7th 1969</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Lorriane</td>
													<td>Cooke</td>
													<td>Technical Services Librarian</td>
													<td>September 21st 2010</td>
													<td>April 7th 1969</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-lg-4">
							<div class="panel panel-bd lobidisable">
								<div class=panel-heading>
									<div class=panel-title>
										<i class=ti-email></i>
										<h4>Messages</h4>
									</div>
								</div>
								<div class=panel-body>
									<div class=message_inner>
										<div class=message_widgets>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Farzana Yasmin</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status available pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar2.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Mubin Khan</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status away pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar3.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Mozammel Hoque</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status busy pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Tanzil Ahmed</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status offline pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar5.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Amir Khan</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status available pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Salman Khan</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status available pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Farzana Yasmin</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status available pull-right"></span>
												</div>
											</a>
											<a href="#">
												<div class=inbox-item>
													<div class=inbox-item-img><img src="assets/dist/img/avatar4.png" class=img-circle alt=""></div>
													<strong class=inbox-item-author>Tanzil Ahmed</strong>
													<span class=inbox-item-date>-13:40 PM</span>
													<p class=inbox-item-text>Hey! there I'm available...</p>
													<span class="profile-status offline pull-right"></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="panel panel-bd lobidisable lg-mb0">
								<div class=panel-heading>
									<div class=panel-title>
										<i class=ti-archive></i>
										<h4>Calender</h4>
									</div>
								</div>
								<div class=panel-body>
									<div class=monthly_calender>
										<div class=monthly id=m_calendar></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-xs">
							<div class="panel panel-bd lobidisable lg-mb0">
								<div class=panel-heading>
									<div class=panel-title>
										<i class=ti-stats-up></i>
										<h4>Recent Activities</h4>
									</div>
								</div>
								<div class=panel-body>
									<ul class="activity-list list-unstyled">
										<li class=activity-purple>
											<small class=text-muted>9 minutes ago</small>
											<p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
										</li>
										<li class=activity-danger>
											<small class=text-muted>15 minutes ago</small>
											<p>You followed Olivia Williamson</p>
										</li>
										<li class=activity-warning>
											<small class=text-muted>22 minutes ago</small>
											<p>You <span class=text-danger>subscribed</span> to Harold Fuller</p>
										</li>
										<li class=activity-primary>
											<small class=text-muted>30 minutes ago</small>
											<p>You updated your profile picture</p>
										</li>
										<li>
											<small class=text-muted>35 minutes ago</small>
											<p>You deleted homepage.psd</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">AdminPix</div>
				<strong>Copyright &copy; 2018</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
			</footer>
		</div> <!-- ./wrapper -->
		<!-- START CORE PLUGINS -->
		<script src="assets/plugins/jQuery/jquery-1.12.4.min.js"></script>
		<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
		<script src="assets/plugins/lobipanel/lobipanel.min.js"></script>
		<script src="assets/plugins/fastclick/fastclick.min.js"></script>
		<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/toastr/toastr.min.js"></script>
		<!-- sparkline Js -->
		<script src="assets/plugins/sparkline/sparkline.min.js"></script>
		<!-- counterup Js -->
		<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
		<script src="assets/plugins/counterup/waypoints.js"></script>
		<!-- emojionearea Js -->
		<script src="assets/plugins/emojionearea/emojionearea.min.js"></script>
		<script src="assets/plugins/monthly/monthly.min.js"></script>
		<!-- chartJs Js -->
		<script src="assets/plugins/chartJs/Chart.min.js"></script>
		<!-- footable-bootstrap Js -->
		<script src="assets/plugins/footable-bootstrap/js/footable.all.min.js"></script>
		<!-- START THEME LABEL SCRIPT -->
		<script src="assets/dist/js/page/dashboard2.js"></script>
		<script src="assets/dist/js/theme.js"></script>
	</body>

<!-- Mirrored from adminpix.thememinister.com/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Jul 2018 10:23:09 GMT -->
</html>