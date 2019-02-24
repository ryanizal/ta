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
	<body class="menu-area">

		<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row justify-content-end">

					</div>			  					
				</div>
			</div>	
			<!-- <div class="section-gap">
				
			</div> -->	  	
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="<?php echo base_url('Welcome');?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
					</div>

						<div class="col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<div class="" >
							<form action="<?php echo base_url();?>Welcome/cari_kopi" method="post" class="form-inline">
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
							<li class="menu-active"><a href="<?php echo base_url('Welcome/login');?>">Login</a></li>

						</ul>
					</nav>		    		
				</div>
			</div>
		</header>
		<section class="section-top-border">
			
		</section>
		<div  class="container" >
		

			<div class="section-top-border">
				<h1 class="mb-30">Search Results : </h1>
				<?php foreach ($kopi as $key => $value) : ?>
					<div class="row single-menu">
						<div class="col-md-3">
							<h3 class="mb-30"><?php echo $value['nama_kopi'] ?></h3>
							<a href="">
								<img src="<?php echo base_url('assets/img/coffee/p12.jpg'); ?>" alt="" class="img-fluid">
							</a>
						</div>
						<div class="col-md-9 mt-sm-20 ">
							<p><b>Origin	:</b> <?php echo $value['origin'] ?></p>
							<p><b>Type	:</b> <?php echo $value['jenis_kopi'] ?></p>
							<p><b>Process	:</b> <?php echo $value['proses_kopi'] ?></p>
							<p><b>About This coffee :</b> <?php echo $value['deskripsi_kopi'] ?></p>
						</div>
					</div>

				<?php endforeach ?>

			</div>
		</div>
	</div>

</div>
