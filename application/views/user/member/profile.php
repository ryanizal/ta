<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-60 col-lg-10">
			<div class="title text-center">
				<h1 class="mb-10">Profile Member</h1>
				<p>heres info you gave to us</p>
			</div>
		</div>
	</div>

	<section class="text-sample">
		<div class="row d-flex justify-content-center single-menu">
			<div class="col-md-5 mt-sm-30">
				<?php echo $this->session->flashdata('pesan'); ?> 
				<h3 class="mb-20 text-center"><?php echo $profile['nama_member']?></h3>
				<div class="text-center">
					<img class="img-circle" width="200" height="200" src="<?php echo base_url('assets/img/member/'.$profile['foto_member']);?>" >
				</div>
				<br>
				<!-- <div class="section-gap"> -->
					<div class="row">
						<div class="col-md-12">	
							<form class="form form-horizontal">
								<div class="form-group row">
									<label class="control-label col-md-3">Name</label>
									<div class="col-md-9">
										: <?php echo $profile['nama_member'] ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Username</label>
									<div class="col-md-9">
										: <?php echo $profile['username_member'] ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Email</label>
									<div class="col-md-9">
										: <?php echo $profile['email_member'] ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">About</label>
									<div class="col-md-9">
										: <?php echo $profile['keterangan_member'] ?>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- <table class="" style="font-size: 130%; word-spacing: 1px">
						<tr>
							<td >Name </td>
							<td>:	<?php echo $profile['nama_member']?></td>
						</tr>
						<tr>
							<td >Email</td>
							<td>:	<?php echo $profile['email_member']?></td>
						</tr>
						<tr>
							<td >Username</td>
							<td>:	<?php echo $profile['username_member']?></td>
						</tr>
						<tr>
							<td >Bio</td>
							<td>:	<?php echo $profile['keterangan_member'] ?></td>
						</tr>
						
					</table> -->
					<div class="pull-right">
						
						<a href="<?php echo base_url()?>Member/edit_profile" class="genric-btn primary circle">Update</a>
					</div>
					<!-- </div> -->
				</div>
			</div>

		</section>

	</div>