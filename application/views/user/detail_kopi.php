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
			<!-- <div class="section-gap">
				
			</div> -->	  	
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
		<section class="section-gap">
			
		</section>
		<div  class="container" >
			<h3 class="panel-title"> <?php echo $k['nama_kopi'] ?></h3>
			<br>
			<div class="row">
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/img/coffee/'.$k['foto_1']); ?>" class="img-responsive">
				</div>
				<div class="col-md-9">

					<form class="form-horizontal">
						<div class="form-group">
			<!-- 		<label class="control-label col-sm-2">Coffee's Name </label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['nama_kopi'] ?></p>
					</div>
				</div> -->
				<div class="form-group">
					<label class="control-label col-sm-2">Acidity</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['acidity'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Sweetness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['sweet'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Bitterness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['bitter'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Savoriness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['savory'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Origin</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['origin'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Roast by</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['id_roaster'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Roast Profile</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['profile_roast'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Description</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['deskripsi_kopi'] ?></p>
					</div>
				</div>
			</form>

		</div>
	</div>

	<div class="section-top-border">
		<h3>Comments:</h3>
		<br>
		<div class="col-md-10">
			<section class="comment-list">
				<!-- First Comment -->
				<article class="row">
					<div class="col-md-2 col-sm-2 hidden-xs">
						<figure class="thumbnail">
							<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url();?>assets/img/member/male4.png" />
							<figcaption class="text-center">username</figcaption>
						</figure>
					</div>
					<div class="col-md-10 col-sm-10">
						<div class="panel panel-default arrow left">
							<div class="panel-body">
								<header class="text-left">
									<div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
									<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
								</header>
								<div class="comment-post">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
								<p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
							</div>
						</div>
					</div>
				</article>


			</section>
		</div>
		<div class="widget-area no-padding blank col-md-10">
			<div class="status-upload">
				<form>
					<textarea placeholder="Say Something About This Coffee..." ></textarea>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
				</form>
			</div><!-- Status Upload  -->
		</div><!-- Widget Area -->
		
	</div>
</div>
</div>

</div>
