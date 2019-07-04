<div class="container">
	<h3 class="text-heading">
		Member, <?php echo $nama_member; ?>		
	</h3>
	
	<p><b><?php echo date("D"); ?></b> <?php echo date("Y M d"); ?></p>	
	<section class="video-sec-area pt-30" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Newest Coffee That Just In!</h1>
						<p>Freshly roasted coffee beans from local Roastery.</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<?php foreach ($kopi as $value): ?>

					<div class="col-lg-5 col-md-5 single-blog single-menu">
						<a href="<?php echo base_url('Member/detail_kopi/'.$value->id_kopi);?>">
							<img class="img-fluid" src="<?php echo base_url($value->foto->first()->path_foto);?>" alt="">

							<hr>
							<a href="<?php echo base_url('Member/detail_kopi/'.$value['id_kopi']);?>">
								<h4 align="center">
									<?php echo $value->nama_kopi; ?>

								</h4>
							</a>
							<p>
								<b>Descrption:  </b><a href="<?php echo  $value->deskripsi_kopi ?>"><?php echo  $value->deskripsi_kopi ?></a>


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
		</div>	
	</section>


	<div class="section-top-border">
		<h3 class="mb-30">Last Seen Product</h3>
		<div class="row">
			
			<?php foreach ($last as $value): ;?>
				<div class="col-md-4 single-menu">
					<div align="center" class="single-defination">
						<h4 class="mb-20"><?php echo $value->nama_kopi; ?></h4>
						<a href=""><img class="img-fluid" src="<?php echo base_url($value->foto->first()->path_foto);?>" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-md-1">

				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>