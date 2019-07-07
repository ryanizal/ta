<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li><a href="<?php echo base_url('administrator/Coffee'); ?>">Kopi</a></li>
		<li class="active"><a href="#">Tambah Kopi</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Tambah Kopi</h3>
		</div>

		<div class="panel-body">
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama Kopi</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_kopi" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Acidity</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="acidity" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Sweetness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="sweet" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bitterness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="bitter" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Savoriness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="savory" required="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Origin</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="origin" required="">
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-1 control-label">Roaster</label>
						<div class="col-sm-3">
						<select class="form-control" name="profile_roast">
							<option value="" disabled selected></option>
							<?php foreach ($roaster as $key => $value): ?>
								<option value="<?php echo $value['id_roaster'] ?>"><?php echo $value['nama_roaster'] ?> </option>
							<?php endforeach ;?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">Profil Roast</label>
					<div class="col-sm-3">
						<select class="form-control" name="profile_roast">
							<option value="" disabled selected></option>
							<?php foreach ($profile_roast as $key => $value): ?>
								<option value="<?php echo $value->id_roast_prof ?>"><?php echo $value->nama_roast_prof; ?> </option>
							<?php endforeach ;?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Jenis Kopi</label>
					<div class="col-sm-3">
						<select class="form-control" name="jenis_kopi">
							<option value="" disabled selected></option>
							<?php foreach ($jenis_kopi as $value): ?>
								<option value="<?php echo $value->id_jenis_kopi ?>"><?php echo $value->jenis_kopi?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Proses Kopi</label>
					<div class="col-sm-3">
						<select class="form-control" name="proses_kopi">
							<option value="" disabled selected></option>
							<?php foreach ($proses_kopi as $value): ?>
								<option value="<?php echo $value->id_proses_kopi ?>"><?php echo $value->nama_proses ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Cita Rasa</label>
					<div class="col-sm-3">
						<select class="form-control" name="proses_kopi">
							<option value="" disabled selected></option>
							<?php foreach ($tastes as $value): ?>
								<option value="<?php echo $value->id_tastes ?>"><?php echo $value->nama_tastes ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">Deskripsi</label>
					<div class="col-sm-11">
						<textarea id="textareaChars" maxlength="500" class="form-control" type="text" name="deskripsi_kopi" rows="4"></textarea>
						<span id="chars">500</span> sisa karakter
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