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
		<link href="<?php echo base_url('assets/slick/slick/slick-theme.css');?>" rel="stylesheet">

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
			<?php foreach ($k as $value): ?>
				<h3 align="center" class="panel-title"> <?php echo $value->nama_kopi?></h3>
				<br>
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="fotocls col-md-12"> 
								<?php foreach ($value->foto as $rowfoto):?>
									<img src= "<?php echo base_url().$rowfoto->path_foto;?>" class="img-fluid">
								<?php endforeach;?>

							</div>
						</div>
					</div>
					<div class="col-md-9 single-menu">

						<form class="form-horizontal">
							<div class="form-group">
			<!-- 		<label class="control-label col-sm-2">Coffee's Name </label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['nama_kopi'] ?></p>
					</div>
				</div> -->
				<div class="form-group">
					<label class="control-label col-sm-2">Acidity :</label>
					<div class="col-sm-10 pull-right">

						<div class="progress">
							<?php 
							$max = 2;
							$isi = $value->acidity/9*90;
							$level = substr($isi, 0, $max);
							?>
							<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
								<?php echo $level?>%
							</div>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Sweetness</label>
					<div class="col-sm-10 pull-right">
						<div class="progress">
							<?php 
							$max = 2;
							$isi = $value->sweet/9*90;
							$level = substr($isi, 0, $max);
							?>
							<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
								<?php echo  $level?>%
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Savoriness</label>
					<div class="col-sm-10 pull-right">
						<div class="progress">
							<?php 
							$max = 2;
							$isi = $value->savory/9*90;
							$level = substr($isi, 0, $max);
							?>
							<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
								<?php echo $level ?>%
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Bitterness</label>
					<div class="col-sm-10 pull-right">
						<div class="progress">
							<?php 
							$max = 2;
							$isi = $value->bitter/9*90;
							$level = substr($isi, 0, $max);
							?>
							<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
								<?php echo $level ?>%
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Origin</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">:  <?php echo $value->origin; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Roast Profile</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">:  <?php echo $value->profil->nama_roast_prof; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Variety</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">:  <?php echo $value->jenis->jenis_kopi; ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Notes	</label>
					<div class="col-sm-10 pull-right">

						<p class="form-control-static">
							<?php foreach ($value->tastes as $taste): ?>
								-  <?php echo $taste->nama_tastes; ?></p>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Roasted By</label>
						<div class="col-sm-10 pull-right">
							<p class="form-control-static">: <?php echo $value->roaster->nama_roaster ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Description</label>
						<div class="col-sm-10 pull-right">
							<p class="form-control-static">: <?php echo $value->deskripsi_kopi; ?></p>
						</div>
					</div>
				</form>
			<?php endforeach; ?>

		</div>
	</div>

	<div class="section-top-border">
		<div class="single-menu">
			<h3>Comments:</h3>
			<br>
			<?php foreach ($komentar as $value): ?>
				<div class="card">
					<div class="card-body">
						<div class="row mb-50">
							<div class="col-md-2">
								<img src="<?php echo base_url('assets/img/').($value->member ? 'member/'.$value->member['foto_member'] : 'roaster/'.$value->roaster['foto_roaster']);?>" class="img img-rounded img-fluid"/>
								<br>
								<p class="text-secondary text-center mt-10"><?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->waktu_komentar)->diffForHumans(); ?></p>
							</div>
							<div class="col-md-10">
								<h5>
									<a class="float-left" href=""><strong><?php echo $value->member ? $value->member->nama_member : $value->roaster->nama_roaster; ?></strong></a>
								</h5>
								<br>
								<div class="clearfix"></div>
								<p><b>Says :	</b><?php echo $value->isi_komentar; ?></p>
							</div>
						</div>
						
					</div>
				</div>
				<br>
			<?php endforeach; ?>
				<!-- <div class="col-md-10">			
					<section class="comment-list">
						<?php foreach ($komentar as $value): ?>
							<article class="row">
								<div class="col-md-2 col-sm-2 hidden-xs">
									<figure class="thumbnail">
										<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url('assets/img/').($value->member ? 'member/'.$value->member['foto_member'] : 'roaster/'.$value->roaster['foto_roaster']);?>" />
										<figcaption class="text-center"><?php echo $value->member ? $value->member->username_member : $value->roaster->username_roaster; ?></figcaption>
									</figure>
								</div>
								<div class="col-md-10 col-sm-10 ">
									<div class="panel panel-default arrow left">
										<div class="panel-body ">
											<header class="text-left">
												<div class="comment-user"><i class="fa fa-user"></i> <?php echo $value->member ? $value->member->nama_member : $value->roaster->nama_roaster; ?></div>
												<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo date("F d, Y", strtotime($value->waktu_komentar)) ;?></time>
											</header>
											<div class="comment-post">
												<p>
													<?php echo $value->isi_komentar; ?>
												</p>
											</div>

											<?php if ($value->member_id_member == $id_member): ?>
												
												<p class="text-right"><a href="<?php echo base_url("Member/hapus_komentar/$value->kopi_id_kopi/$value->id_komentar") ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a></p>
											<?php endif ?>
										</div>
									</div>
								</div>
							</article>
							<hr>
						<?php endforeach ?>
					</section>
				</div> -->
				
			</div>
			<div>
				<p>You are not log in. please <b><a href="<?php echo base_url('Welcome/signup'); ?>">Signup</a></b>. Or <b><a href="<?php echo base_url('Welcome/login'); ?>">Login</a></b></p>
			</div>
		</div>
	</div>
</div>

</div>

