<div class="container"> 
	<div class="single-menu">
		<h4>
			Welcome, <?php echo $nama_member; ?>		
		</h4>

		<p><b><?php echo date("D"); ?></b> <?php echo date("Y M d"); ?></p>
	</div>	
	<section class="video-sec-area pt-30" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Newest Coffee That Just In!</h1>
						<p>Freshly roasted coffee beans from local Roastery.</p>
					</div>
					<hr>
				</div>
			</div>						
			<div class="row">
				<?php foreach ($kopi as $value): ?>

					<div class="col-lg-5 col-md-5 single-blog single-menu">
						<a href="<?php echo base_url('Member/detail_kopi/'.$value->id_kopi);?>">
							<?php
							$image = $value->foto->first()['path_foto'];
							if (empty($image)){
								$image ='assets/img/np.png';
							}
							?>
							<img src="<?php echo base_url().$image;?>" class="img-fluid">
							<!-- <img class="img-fluid" src="<?php echo base_url($value->foto->first()->path_foto);?>" alt=""> -->

							<hr>
							
							<h4 align="center">
								<?php echo $value->nama_kopi; ?>

							</h4>
							
							<p>
								<b>Descrption:  </b><?php echo  $value->deskripsi_kopi ?>. <b> More...</b>


							</p>
							<br>
							<br>

							<span class="genric-btn primary-border small">
								<?php echo $value->jenis->jenis_kopi;?>
							</span>

							<span class="genric-btn primary-border small">
								<?php echo $value->profil->nama_roast_prof;?>
							</span>

							<span class="genric-btn primary-border small">
								<?php echo $value->proses->nama_proses;?>
							</span>
							<br>
							<br>
							<?php  foreach ($value->tastes as $taste) { ?>
								<span class="badge badge-warning large">
									<?php echo $taste->nama_tastes;?>
								</span>
							<?php  } ?>

							<br>
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


	<div class="section-top-border">
		<h3 class="mb-30">Last Seen Product</h3>
		<div class="row">
			
			<?php foreach ($last as $value): ;?>
				<div class="col-md-3 single-menu">
					<div align="center" class="single-defination">
						<h4 class="mb-20"><?php echo $value->nama_kopi; ?></h4>
						<a href="<?php echo base_url('Member/detail_kopi/'.$value->id_kopi);?>">
							<?php
							$image = $value->foto->first()['path_foto'];
							if (empty($image)){
								$image ='assets/img/np.png';
							}
							?>
							<img src="<?php echo base_url().$image;?>" class="img-fluid">
							<!-- <img class="img-fluid" src="<?php echo base_url($value->foto->first()->path_foto);?>" class="img-responsive"></a> -->
						</div>
					</div>
					<div class="col-md-1">

					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>