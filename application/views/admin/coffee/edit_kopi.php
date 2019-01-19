<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="">Home</a></li>
		<li><a href="">Kopi</a></li>
		<li class="active"><a href="">Edit Kopi</a></li>
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
						<input class="form-control" type="text" name="nama_kopi"value="<?php echo $k['nama_kopi'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Acidity</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="acidity"value="<?php echo $k['acidity'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Sweetness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="sweet"value="<?php echo $k['sweet'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Bitterness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="bitter"value="<?php echo $k['bitter'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Savoriness</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="savory"value="<?php echo $k['savory'] ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-1 control-label">Roaster</label>
					<div class="col-sm-11">
						<input class="form-control" type="text" name="id_roaster"value="<?php echo $k['id_roaster'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">Foto </label>
					<div class="col-sm-3">
						<img src="<?php echo base_url("assets/img/coffee/$k[foto_1] ") ?>" class="img-responsive">	
						<input class="form-control" type="file" name="foto_1" >
					</div>
					<div class="col-sm-3">	
						<img src="<?php echo base_url("assets/img/coffee/$k[foto_2] ") ?>" class="img-responsive">	
						<input class="form-control" type="file" name="foto_2">
					</div>
					<div class="col-sm-3">	

						<img src="<?php echo base_url("assets/img/coffee/$k[foto_3] ") ?>" class="img-responsive">	
						<input class="form-control" type="file" name="foto_3">
					</div>

				</div>
				
				<button type="submit" class="btn btn-success col-lg-offset-11">Submit</button>
			</form>
		</div>
	</div>
</div>