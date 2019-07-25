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
			<div class="container">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="<?php echo base_url('Welcome');?>"><img src="<?php echo base_url();?>assets/user/img/logo.png" alt="" title="" /></a>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="" >
								<form action="<?php echo base_url();?>Welcome/cari_kopi" method="post" class="form-inline">
									<input class="form-control" name="keyword" placeholder="Search Coffee..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Coffee...'" required="" type="text">
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
					<?php foreach ($kopi as $value): ?>

						<div class="col-lg-5 col-md-5 single-blog single-menu">
							<a href="<?php echo base_url('Welcome/detail_kopi/'.$value->id_kopi);?>">
								<img class="img-fluid" src="<?php echo base_url($value->foto->first()->path_foto);?>" alt="">
								
								<hr>
								<a href="<?php echo base_url('Welcome/detail_kopi/'.$value['id_kopi']);?>">
									<h4 align="center">
										<?php echo $value->nama_kopi; ?>

									</h4>
								</a>
								<p>
									<b>Descrption:  </b><?php echo  $value->deskripsi_kopi ?>.  <a href="<?php echo base_url('Welcome/detail_kopi/'.$value->id_kopi);?>"><b> More...</b></a>


								</p>
								<br>
								

								<span class="genric-btn primary-border medium disabled">
									<?php echo $value->jenis->jenis_kopi;?>
								</span>

								<span class="genric-btn primary-border medium disabled">
									<?php echo $value->profil->nama_roast_prof;?>
								</span>

								<span class="genric-btn primary-border medium disabled">
									<?php echo $value->proses->nama_proses;?>
								</span>
								<br>
								
								<?php  foreach ($value->tastes as $taste) { ?>
									<span class="badge badge-pill badge-primary">
										<?php echo $taste->nama_tastes;?>
									</span>
								<?php  } ?>

								<br>
								
								

								<a href=""><p class="post-date">Roasted by <?php echo $value->roaster->nama_roaster;?></p></a>
							</a>
						</div>
						<div class="col-lg-1 col-md-1">

						</div>
					<?php endforeach; ?>				
				</div>
				<div class="row">
					<div class="col-lg-5">
						
					</div>
					<div class="col-lg-5">
						
						<?php echo $links; ?> 
					</div>
				</div>
				
			</div>	
		</section>
		<!-- <nav aria-label="...">
			<ul class="pagination">
				<li class="page-item disabled">
					<span class="page-link">Previous</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item active" aria-current="page">
					<span class="page-link">
						2
						<span class="sr-only">(current)</span>
					</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav> -->
