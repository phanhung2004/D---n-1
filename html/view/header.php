<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo_quanao.svg" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/home_1.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script> -->

</head>

<body>
	
	<div id="page">
		
	<header class="version_1">
		<div class="layer"></div><!-- Mobile menu overlay mask -->
		<div class="main_header">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
						<div id="logo">
							<a href="index.php?act=home"><img src="img/logo_quanao.svg" alt="" width="100" height="55" style="filter: brightness(0) invert(1);"></a>
						</div>
					</div>
					<nav class="col-xl-6 col-lg-7">
						<a class="open_close" href="javascript:void(0);">
							<div class="hamburger hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</a>
						<!-- Mobile menu button -->
						<div class="main-menu">
							<div id="header_menu">
								<a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
								<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
							</div>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu">Home</a>
									<ul>
										<li><a href="index.php?act=home">Home</a></li>
										<li><a href="index.php?act=index-2">Video Mô tả</a></li>
										<!-- <li><a href="index.php?act=index-3">Vertical Slider</a></li>
										<li><a href="index.php?act=index-4">GDPR Cookie Bar</a></li> -->
									</ul>
								</li>
								<li class="megamenu submenu">
									<a href="javascript:void(0);" class="show-submenu-mega">Pages</a>
									<div class="menu-wrapper">
										<div class="row small-gutters">
											<div class="col-lg-3">
												<h3>Danh mục các loại áo</h3>
												<ul>
													<li><a href="index.php?act=aosomi">Áo sơ mi</a></li>
													<li><a href="index.php?act=aophong">Áo phông</a></li>
													<li><a href="index.php?act=aopolo">Áo Polo</a></li>
													<!-- <li><a href="index.php?act=listing-grid-4-sidebar-left">Grid Sidebar Left</a></li>
													<li><a href="index.php?act=listing-grid-5-sidebar-right">Grid Sidebar Right</a></li>
													<li><a href="index.php?act=listing-grid-6-sidebar-left">Grid Sidebar Left 2</a></li>
													<li><a href="index.php?act=listing-grid-7-sidebar-right">Grid Sidebar Right 2</a></li> -->
												</ul>
											</div>

										</div>
										<!-- /row -->
									</div>
									<!-- /menu-wrapper -->
								</li>

								<li>
									<a href="#0">Tổng hợp bình luận</a>
								</li>
								<?php
									if(isset($_SESSION['user'])){
										extract($_SESSION['user']);
										if($role==1){
								?>
								<li>
										
									<a href="admin/index.php">Admin</a>
								</li>
								<?php
									}
								}
								?>
							</ul>
						</div>
						<!--/main-menu -->
					</nav>
					<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
						<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /main_header -->

		<div class="main_nav Sticky">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3">

					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
						<div class="custom-search-input">
							<form action="index.php?act=sanpham" method="POST">
								<input type="text" placeholder="Search over 10.000 products" name="keyword">
								<button type="submit"><i class="header-icon_search_custom"></i></button>
							</form>
						</div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-3">
						<ul class="top_tools">
							<?php
								if(isset($_SESSION['user'])){
					
							?>
							<li>
								<div class="dropdown dropdown-access">
									<a href="index.php?act=account" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										<a href="index.php?act=account" class="btn_1">Sign In or Sign Up</a>

									</div>
								</div>
								
							</li>
							<li>
								<div class="dropdown dropdown-cart">
									<a href="index.php?act=cart" class="cart_bt"></a>
									<div class="dropdown-menu">

										<div class="total_drop">
											<div class="clearfix"><strong></strong><span></span></div>
											<a href="index.php?act=cart" class="btn_1 outline">View Cart</a><a href="index.php?act=checkout" class="btn_1">Checkout</a>
										</div>
									</div>
								</div>
								
							</li>
							<li>
								<a href="index.php?act=hoadon" class="wishlist"><span>Wishlist</span></a>
							</li>
							<?php
								}else{
							
							?>
							<li>
								<div class="dropdown dropdown-access">
									<a href="index.php?act=account" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										<a href="index.php?act=account" class="btn_1">Sign In or Sign Up</a>

									</div>
								</div>
							</li>
							<li>
								<div class="dropdown dropdown-cart">
									<a href="index.php?act=account" class="cart_bt"></a>
									<div class="dropdown-menu">
										<div class="total_drop">
											<div class="clearfix"></div>
											<a href="index.php?act=cart" class="btn_1 outline">View Cart</a><a href="index.php?act=checkout" class="btn_1">Checkout</a>
										</div>
									</div>
								</div>
							
							</li>
							<li>
								<a href="index.php?act=account" class="wishlist"><span>Wishlist</span></a>
							</li>
							<?php
								}
							?>

						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
				<input type="text" class="form-control" placeholder="Search over 10.000 products">
				<input type="submit" class="btn_1 full-width" value="Search">
			</div>
			<!-- /search_mobile -->
		</div>
		<!-- /main_nav -->
	</header>