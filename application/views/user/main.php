	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/user/img/fav.png">
		
		<meta name="author" content="codepixer">
		
		<meta name="description" content="">
		
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/linearicons.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/nice-select.css">					
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/main.css">
	</head>
	<body>

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
						<a href="<?php echo base_url('Welcome');?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="<?php echo base_url('Welcome/login');?>">Login</a></li>

						</ul>
					</nav>		    		
				</div>
			</div>
		</header>



		<section class="banner-area" id="home">	
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-start">
					<div class="banner-content col-lg-7">
						<h6 class="text-white text-uppercase">good morning,</h6>
						<h1>
							Where is<br>
							My Coffee?			
						</h1>
						<a href="<?php echo base_url('Welcome/signup');?>" class="primary-btn text-uppercase">Signup Now</a>
					</div>											
				</div>
			</div>
		</section>

		<section class="blog-area section-gap" id="blog">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">What kind of Coffee we have in our system :</h1>
							<p>Freshly roasted coffee beans from local Roastery.</p>
						</div>
					</div>
				</div>						
				<div class="row">
					<?php foreach ($new as $key => $value): ?>

						<div class="col-lg-6 col-md-6 single-blog">
							<a href="<?php echo base_url('Member/detail_kopi/'.$value['id_kopi']);?>">
								<img class="img-fluid" src="<?php echo base_url('assets/img/coffee/'.$value['foto_1']);?>" alt="">
								<ul class="post-tags">
									<li><a href="#"><?php echo $value['profile_roast']; ?></a></li>
									<!-- <li><a href="#">Atribut B</a></li> -->
								</ul>
								<a href="<?php echo base_url('Welcome/detail_kopi/'.$value['id_kopi']);?>">
									<h4>
										<?php echo $value['nama_kopi']; ?>

									</h4>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
								</p>
								<a href=""><p class="post-date">Roasted by <?php echo $value['id_roaster'] ?></p></a>
							</a>
						</div>
					<?php endforeach; ?>				
				</div>
			</div>	
		</section>