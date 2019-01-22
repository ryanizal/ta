<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="">Home</a></li>
		<li class=""><a href="">Coffee</a></li>
		<li class="active"><a href="">Detail Kopi</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="<?php echo base_url('administrator/Coffee') ?>" class="pull-right">back to list</a>
			<h3>DETAIL COFFEE</h3>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<img src= "<?php echo base_url();?>/assets/img/coffee/p12.jpg" class="img-responsive">
				</div>
				<div class="col-md-9">
					
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-5">Coffee's Name</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['nama_kopi'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Acidity</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['acidity'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Sweetness</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['sweet'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Bitterness</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['bitter'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Savoriness</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['savory'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Origin</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['origin'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Roast by</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['id_roaster'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Roast Profile</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['id_roast_prof'] ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5">Description</label>
							<div class="col-md-7">
								<p class="form-control-static"><?php echo $k['deskripsi_kopi'] ?></p>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>