<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li><a href="<?php echo base_url('administrator/Coffee'); ?>">Kopi</a></li>
		<li class="active"><a href="#">Edit Kopi</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Edit Kopi</h3>
		</div>

		<div class="panel-body">
			<?php foreach ($kopi as $value): ;?>
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama Kopi</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_kopi"value="<?php echo $value->nama_kopi ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Acidity</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="acidity"value="<?php echo $value->acidity ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Sweetness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="sweet"value="<?php echo $value->sweet ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bitterness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="bitter"value="<?php echo $value->bitter ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Savoriness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="savory"value="<?php echo $value->savory ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-1 control-label">Roaster</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="id_roaster"value="<?php echo $value->roaster->nama_roaster ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Roast Profile</label>
					<div class="col-sm-3">
						<select class="form-control" name="profile_roast">
							<option value="" disabled>Roast Profile</option>
							<?php foreach ($profile_roast as $key => $value): ?>
								<option 
								<?php if ($value == $k['profile_roast']) 
								{
									echo "selected";
								} ?>
								value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Tipe</label>
					<div class="col-sm-3">
						<select class="form-control" name="jenis_kopi">
							<option value="" disabled>Coffee's Kind</option>
							<?php foreach ($jenis_kopi as $key => $value): ?>
								<option 
								<?php if ($value == $k['jenis_kopi']) 
								{
									echo "selected";
								} ?>
								value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Proses</label>
					<div class="col-sm-3">
						<select class="form-control" name="proses_kopi">
							<option value="" disabled>Process</option>
							<?php foreach ($proses_kopi as $key => $value): ?>
								<option 
								<?php if ($value == $k['proses_kopi']) 
								{
									echo "selected";
								} ?>
								value="<?php echo $value ?>"><?php echo $value ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Deskripsi</label>
					<div class="col-sm-11">
						<textarea id="textareaChars" maxlength="500" class="form-control" type="text" name="deskripsi_kopi" rows="4">
							<?php echo $value->deskripsi_kopi ?>
						</textarea>
						<span id="chars">500</span> sisa karakter
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto </label>
					<div class="col-sm-3">
						<img src="<?php echo base_url().$value->foto->first()->path_foto ?>" class="img-responsive">	
						<input class="form-control" type="file" name="path_foto" >
					</div>
					

				</div>
				
				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		<?php endforeach; ?>
		</div>
	</div>
</div>