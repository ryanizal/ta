<div class="container">
	<!-- <section class="sample-text-area"> -->
		<div class="row">
			<div class="col-lg-12 col-md-12 single-menu">
				<h3 class="mb-30 text-center">Edit Profile</h3>
				<br>
				<form method="post" enctype="multipart/form-data" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-sm-12">
							<input class="single-input" type="text" name="username_member" value="<?php echo $profile['username_member'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-12">
							<input class="single-input" type="password" name="password_member" value="<?php echo $profile['password_member'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Full Name</label>
						<div class="col-sm-12">
							<input class="single-input" type="text" name="nama_member" value="<?php echo $profile['nama_member'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">About You</label>
						<div class="col-sm-12">
							<textarea name="keterangan_member" class="single-input" ><?php echo $profile['keterangan_member'] ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Profile Picture</label>
						<div class="col-sm-12">
							<img src="<?php echo base_url('assets/img/member/'.$profile['foto_member']); ?>" class="img-responsive single-menu-kom" width="200" height="200">
							<input class="" type="file" name="foto_member">
						</div>
					</div>
					<br>
					<div class="col-lg-3 col-md-3 pull-right">
						<button onclick="goBack()" class="genric-btn danger circle">Cancel</button>
						<button type="submit" class="genric-btn success circle">Update</button>
					</div>
				</div>
			</div>
			<!-- </section> -->
		</div>
	</div>
</div>
<script>
	function goBack() 
	{
		window.history.back()
	}
	
</script>