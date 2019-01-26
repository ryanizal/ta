<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="">Home</a></li>
		<li><a href="">Kopi</a></li>
		<li class="active"><a href="">Tambah Kopi</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Tambah Kopi</h3>
		</div>

		<div class="panel-body">
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Coffee's Name</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_kopi">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Acidity</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="acidity">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Sweetness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="sweet">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bitterness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="bitter">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Savoriness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="savory">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Origin</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="origin">
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-1 control-label">Roaster</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="id_roaster">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">Roast Profile</label>
					<div class="col-sm-3">
						<select class="form-control" name="profile_roast">
							<option value="" disabled selected>Roast Profile</option>
							<?php foreach ($profile_roast as $key => $value): ?>
								<option value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Coffee's Kind</label>
					<div class="col-sm-3">
						<select class="form-control" name="jenis_kopi">
							<option value="" disabled selected>Coffee's Kind</option>
							<?php foreach ($jenis_kopi as $key => $value): ?>
								<option value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Process</label>
					<div class="col-sm-3">
						<select class="form-control" name="proses_kopi">
							<option value="" disabled selected>Process</option>
							<?php foreach ($proses_kopi as $key => $value): ?>
								<option value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">About this Coffee</label>
					<div class="col-sm-11">
						<textarea class="form-control" type="text" name="deskripsi_kopi" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto 1</label>
					<div class="col-sm-3">
						<input class="form-control" type="file" name="foto_1">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto 2</label>
					<div class="col-sm-3">
						<input class="form-control" type="file" name="foto_2">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto 3</label>
					<div class="col-sm-3">
						<input class="form-control" type="file" name="foto_3">
					</div>
				</div>

				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		</div>
	</div>
</div>