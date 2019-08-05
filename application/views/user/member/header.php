	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/user/img/fav.png">
		<meta name="author" content="codepixer">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Member</title>

		<link href="<?php echo base_url();?>assets/slick/slick/slick-theme.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/nice-select.css">					
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/komen.css">
		<script src="<?php echo base_url();?>assets/user/js/vendor/jquery-2.2.4.min.js"></script>
		
	</head>
	<body class="menu-area">

		<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-end">

					</div>			  					
				</div>
			</div>			  	
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="<?php echo base_url('member'); ?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="" >
								<form action="<?php echo base_url();?>Member/cari_kopi" method="post" class="form-inline">
									<input class="form-control" name="keyword" placeholder="Search Coffee..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Coffee... '" required="" type="text">
									<button class="click-btn btn btn-default" type="submit">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>

							</div>
						</div>
					</div>

					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="<?php echo base_url('member'); ?>">Home</a></li>
							<li><a href="<?php echo base_url('member/profile'); ?>">Profile</a></li>
							<li class="menu-has-children"><a href="#">Coffee</a>
								<ul>
									<li><a href="<?php echo base_url('member'); ?>">Coffee</a></li>
									<li><a href="<?php echo base_url('member/rekomendasi'); ?>">Recomendation</a></li>
								</ul>
							</li>
							<li class="menu-has-children"><a href="<?php echo base_url('Member/logout') ?>" onclick="javascript: return confirm('Are you sure to logout ?')">Logout</a>

							</ul>
						</nav>		    		
					</div>
				</div>
			</header>
			
			<br>
			<br>
			<br>
			<br>
			<br>