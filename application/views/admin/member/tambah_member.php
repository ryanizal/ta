<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li><a href="<?php echo base_url('administrator/Member'); ?>">Member</a></li>
		<li class="active"><a href="#">Tambah Member</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Tambah Member</h3>
		</div>

		<div class="panel-body">
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Username</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="username_member">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Password</label>
					<div class="col-sm-11">
						<input class="form-control" type="password" name="password_member">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama Lengkap</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_member">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bio</label>
					<div class="col-sm-11">
						<textarea class="form-control" type="text" name="keterangan_member" rows="8"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto</label>
					<div class="col-sm-3">
						<input class="form-control" type="file" name="foto_member">
					</div>
				</div>
				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		</div>
	</div>
</div>