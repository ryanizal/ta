<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li><a href="<?php echo base_url('administrator/Roaster'); ?>">Roaster</a></li>
		<li class="active"><a href="">Tambah Roaster</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Tambah Roaster</h3>
		</div>

		<div class="panel-body">
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Username</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="username_roaster">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Email</label>
					<div class="col-sm-11">
						<input class="form-control" type="email" name="email_roaster">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Password</label>
					<div class="col-sm-11">
						<input class="form-control" type="password" name="password_roaster">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama Lengkap</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_roaster">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bio</label>
					<div class="col-sm-11">
						<textarea class="form-control" type="text" name="deskripsi_roaster" rows="8"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Alamat</label>
					<div class="col-sm-11">
						<textarea class="form-control" type="text" name="alamat_roaster" rows="8"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">link google maps<i class="fas fa-question-circle" data-toggle="tooltip" title="Just copy your Roastery's google maps link. If you dont have it, just skip it."></i></label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="lokasi">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">No Telp</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="telp_roaster">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto</label>
					<div class="col-sm-3">
						<input class="form-control" type="file" name="foto_roaster">
					</div>
				</div>
				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		</div>
	</div>
</div>