<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-60 col-lg-10">
			<div class="title text-center">
				<h1 class="mb-10">Roastery Profile</h1>
				<p>heres info you gave to us</p>
			</div>
		</div>
	</div>

	<section class="text-sample">
		<div class="row d-flex justify-content-center">
			<div class="col-md-5 mt-sm-30">
				<h3 class="mb-20 text-center"><?php echo $profile['nama_roaster'];?></h3>
				<div class="text-center">
					<img class="img-circle" width="200" height="200" src="<?php echo base_url('assets/img/roaster/'.$profile['foto_roaster']);?>" >
				</div>
				<div class="section-gap">
					<table class="" style="font-size: 130%; word-spacing: 1px">
						<!-- <tr>
							<td >Name </td>
							<td>Roastery lorem</td>
						</tr> -->
						<tr>
							<td >Username</td>
							<td>:	<?php echo $profile['username_roaster'] ?></td>
						</tr>
						<tr>
							<td >About</td>
							<td>:	<?php echo $profile['deskripsi_roaster'] ?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td>:	<?php echo $profile['alamat_roaster'] ?></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td>:	<?php echo $profile['telp_roaster'] ?></td>
						</tr>
						
					</table>
					<div class="pull-right">
						
						<a href="<?php echo base_url('roaster/edit_profile'); ?>" class="genric-btn primary circle">Update</a>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>