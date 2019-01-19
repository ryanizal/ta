<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="">Home</a></li>
		<li><a href="">Roaster</a></li>
		<li class="active"><a href="">Edit Roaster</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Edit Roaster</h3>
		</div>

		<div class="panel-body">
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >

				<div class="row">
					<div class="col-md-4 text-center">
						<img src="<?php echo base_url("assets/img/roaster/$r[foto_roaster]") ?>" \ class="img-responsive">
						<input class="form-control" type="file" name="foto_roaster">
					</div>


					<div class="col-md-8 ">
						<div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Username</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="username_roaster" value="<?php echo $r['username_roaster'] ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input class="form-control" type="password" name="password_roaster" value="<?php echo $r['password_roaster'] ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="nama_roaster" value="<?php echo $r['nama_roaster'] ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Bio</label>
								<div class="col-sm-9">
									<textarea class="form-control" type="text" name="deskripsi_roaster" rows="8" value="<?php echo $r['deskripsi_roaster'] ?>"></textarea>
								</div>
							</div>
							
						</div>
					</div>
				</div>

				
				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		</div>
	</div>
</div>