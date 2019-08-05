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
					<?php echo $this->session->flashdata('pesan'); ?> 
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
		<div class="pull-right">
			<a href="<?php echo base_url()?>Roaster/edit_profile" class="genric-btn primary circle">Update</a>
		</div>
		<br>
		
	</section>	
	