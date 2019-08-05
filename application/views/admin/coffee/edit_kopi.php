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
			
			<form class="form-horizontal" method="post" enctype="multipart/form-data" >
				<div class="form-group">
					<label class="col-sm-1 control-label">Nama Kopi</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="nama_kopi"value="<?php echo $kopi->nama_kopi ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Acidity</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="acidity"value="<?php echo $kopi->acidity ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Sweetness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="sweet"value="<?php echo $kopi->sweet ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bitterness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="bitter"value="<?php echo $kopi->bitter ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Savoriness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="savory"value="<?php echo $kopi->savory ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">Roaster</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="id_roaster"value="<?php echo $kopi->roaster->nama_roaster ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Roast Profile</label>
					<div class="col-sm-3">
						<select class="form-control" name="profile_roast">
							<option value="" disabled>Roast Profile</option>
							<?php foreach ($profile_roast as $pr): ?>
								<option 
								<?php if ($pr->id_roast_prof == $kopi->profil->id_roast_prof) 
								{
									echo "selected";
								} ?>
								value="<?php echo $pr->id_roast_prof ?>"><?php echo $pr->nama_roast_prof ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Tipe</label>
					<div class="col-sm-3">
						<select class="form-control" name="jenis_kopi">
							<option value="" disabled>Coffee's Kind</option>
							<?php foreach ($jenis_kopi as $jk): ?>
								<option 
								<?php  if ($jk->id_jenis_kopi == $kopi->jenis->id_jenis_kopi) 
								{
									echo "selected";
								} ?>
								value="<?php echo $jk->id_jenis_kopi ?>"><?php echo $jk->jenis_kopi ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Proses</label>
					<div class="col-sm-3">
						<select class="form-control" name="proses_kopi">
							<option value="" disabled>Process</option>
							<?php foreach ($proses_kopi as $pk): ?>
								<option 
								<?php  if ($pk->id_proses_kopi == $kopi->proses->id_proses_kopi) 
								{
									echo "selected";
								} ?>
								value="<?php echo $pk->id_proses_kopi ?>"><?php echo $pk->nama_proses ?> </option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group" id="dynamic_field">
					<div class="row">
						<label class="col-md-1 mb-20 control-label">Cita Rasa</label>
						<div class="col-md-4">
							<select class="form-control" name="tastes[]">
								<?php foreach ($tastes as $value): ?>
									<!-- <option value="" disabled selected></option> -->
									<!-- <option value="<?php echo $value->id_tastes ?>" disabled selected>Taste Note's</option> -->
									<option value="<?php echo $value->id_tastes ?>"><?php echo $value->nama_tastes ?> </option>
								<?php endforeach ?>
							</select>
						</div>
						
						<div class="col-md-5 mt-15">
							<button type="button" class="addp genric-btn info circle small" title="Add More"> + </button>
							<button type="button" class="removep genric-btn danger circle small" title="Remove"> x </button>
						</div>	
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Deskripsi</label>
					<div class="col-sm-11">
						<textarea id="textareaChars" maxlength="500" class="form-control" type="text" name="deskripsi_kopi" rows="4">
							<?php echo $kopi->deskripsi_kopi ?>
						</textarea>
						<span id="chars">500</span> sisa karakter
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-1 control-label">Foto </label>
					<div class="col-lg-6">	
						<div class="file-uploader">
							<input type="file" name="photos" class="fileuploader-area" data-fileuploader-files='<?php echo isset($photos) && count($photos) > 0 ? json_encode($photos) : null ?>'>
							
						</div>
					</div>


				</div>
				<script>
					function goBack() 
					{
						window.onbeforeunload = function(){
							return 'Are you sure you want to leave?';
						};
					}
				</script>
				<div class="col-lg-2 col-md-2 pull-right">
					<button onClick="goBack()" class="btn btn-warning">Cancel</button>
					<button type="submit" onClick="alert('Coffee Sucessfully Edited')" class="btn btn-success">Submit</button>
				</div>
				
			</form>
		</div>
	</div>
</div>

	<script>
		var counter = 0;
		$('.addp').click(function () {
			console.log($(this));
			var fg = $(this).parent().parent().clone(true, true);
			counter++;
			if (counter<5)
				$('#dynamic_field').append(fg);
		});

		$('.removep').click(function () {
			if ($('#dynamic_field > div').length > 1) {
				$(this).parent().parent().remove();
			}
		});
	</script>