<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-60 col-lg-10">
			<div class="title text-center">
				<h1 class="mb-10">Roastery Profile</h1>  
			</div>
		</div>
	</div>

	<section class="text-sample single-menu">
		<div class="row d-flex justify-content-center">
			<?php foreach ($roaster as $value):; ?>
				<div class="col-md-5 mt-sm-30">
					<h3 class="mb-20 text-center"><?php echo $value['nama_roaster'];?></h3>
					<br>
					<div class="text-center single-menu">
						<img class="img-circle" border="pixels" src="<?php echo base_url('assets/img/roaster/'.$value['foto_roaster']);?>" >
					</div>
					<div class="single-menu">
						<?php echo  $value['deskripsi_roaster'] ; ?>
					</div>
					<div class="single-menu input-group-icon mt-10">
						<div class="row">
							<div class="col-lg-12 mb-20">
								<i class="fa fa-phone"></i> <?php echo $value['telp_roaster']; ?>
							</div>
							<div class="col-lg-12 mb-20">
								<i class="fa fa-envelope"> </i> <?php echo $value['email_roaster']; ?>
							</div>
							<div class="col-lg-12 mb-20">
								<i class="fa fa-thumb-tack"> </i> <?php echo $value['alamat_roaster']; ?>
							</div>
							<div class="col-lg-12 mb-20">
								<a href="<?php echo $value['lokasi']; ?>"><i class="fa fa-map-marker"> </i> <?php echo $value['nama_roaster']; ?></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
		<br>

	</section>
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-60 col-lg-10">
			<div class="title text-center">
				<h1 class="mb-10">Coffee From This Roastery</h1>  
			</div>
		</div>
	</div>

	<div class="row">
		<?php foreach ($kopi as $value): ?>
			<div class="col-lg-4 text-center"><a href="<?php echo base_url('Member/detail_kopi/').$value->id_kopi; ?>">
			<div class="single-menu">
				<!-- <div class=" text-center"> -->
					<div class="">
						<h5 >
							<?php echo $value->nama_kopi;?>

						</h5>
					</div>
					<br>
					<?php
							$image = $value->foto->first()['path_foto'];
							if (empty($image)){
								$image = 'assets/img/np.png';
							}
							?>
							<img src="<?php echo base_url().$image;?>" class="center" width="200" height="200">
					<!-- <img src="<?php echo base_url().$value->foto->first()->path_foto;?>" class="center" width="200" height="200"> -->
					<!-- </div> -->
				</div>
			</div>
		</a>
	<?php endforeach; ?>
</div>

</div>