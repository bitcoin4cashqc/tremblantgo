<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title><?= $title; ?></title>
		
        <!-- All Plugins Css -->
        <link rel="stylesheet" href="assets/css/plugins.css">
		 
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		<!-- Custom MSG Color Option -->
		<link href="assets/css/msg.css" rel="stylesheet">
		
    </head>
	
    <body class="red-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
<!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper">
							<ul class="nav-menu">
							
								<li class="<?= $current_file_name == 'index.php' ? 'active' : ''; ?>"><a href="javascript:void(0);">Home<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="javascript:void(0);">Explore<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="events.html">All Events</a></li>
										<li><a href="hotels.html">Find Hotels</a></li>
										<li><a href="adventures.html">Find Adventures</a></li>		
										<li><a href="booking.html">Booking Page</a></li>
										<li><a href="dashboard.html">User Dashboard</a></li>
										<li><a href="add-listing.html">Submit Listing</a></li> 
									</ul>
								</li>
								
								
								
								
								<li class="<?= $current_file_name == 'contact.php' ? 'active' : ''; ?>"><a href="contact.php">Contacts</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<?php if (!isset($_SESSION['account_loggedin'])) { ?>
								<li>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#login">
										<i class="fa fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
									</a>
								</li>
								<?php }else{?>
									<a href="profile.php">
									<img src="assets/img/user-1.png" class="avater-img" alt=""><span class="dn-lg"><?=htmlspecialchars($_SESSION['account_name'], ENT_QUOTES);?></span>
									</a>
									
								<?php }?>
								<?=  $admin_panel_link; ?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->