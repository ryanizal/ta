<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li class=""><a href="<?php echo base_url('administrator/Coffee'); ?>">Coffee</a></li>
		<li class="active"><a href="#">Detail Kopi</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="<?php echo base_url('administrator/Coffee') ?>" class="pull-right">back to list</a>
			<h3>Detail Kopi</h3>
		</div>

		<div class="panel-body">
			<div class="row">
				<?php foreach ($k as $value):;?>
					<div class="fotocls col-md-3">
						<?php
							//print_r($value->foto[0]);
						$image = $value->foto->first()['path_foto'];
						if (empty($image)){
							?>
							<img src= "<?php echo base_url('assets/img/np.png');?>" class="img-responsive">
							<?php
							
						}
						else{
							foreach ($value->foto as $rowfoto) :
								?>
								<div class="col-md-3">
									<img src= "<?php echo base_url().$rowfoto->path_foto;?>" class="img-responsive">
								</div>
								<?php
							endforeach;
						}
						?>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="form-group">

								<form class="form-horizontal">
									<div class="form-group">
										<label class="control-label col-sm-2">Nama Kopi</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->nama_kopi ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Acidity</label>
										<div class="col-sm-9">
											<div class="progress">
												<?php 
												$max = 2;
												$isi = $value->acidity/9*90;
												$level = substr($isi, 0, $max);
												?>
												<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
													<?php echo $level?>% 
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Sweetness</label>
										<div class="col-sm-9">
											<div class="progress">
												<?php 
												$max = 2;
												$isi = $value->sweet/9*90;
												$level = substr($isi, 0, $max);
												?>
												<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
													<?php echo $level?>% 
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Savoriness</label>
										<div class="col-sm-9">
											<div class="progress">
												<?php 
												$max = 2;
												$isi = $value->savory/9*90;
												$level = substr($isi, 0, $max);
												?>
												<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
													<?php echo $level?>% 
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Bitterness</label>
										<div class="col-sm-9">
											<div class="progress">
												<?php 
												$max = 2;
												$isi = $value->bitter/9*90;
												$level = substr($isi, 0, $max);
												?>
												<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
													<?php echo $level?>% 
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Origin</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->origin ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Roast by</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->roaster->nama_roaster ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Roast Profile</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->profil->nama_roast_prof ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Tipe</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->jenis->jenis_kopi ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Proses</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->proses->nama_proses ?></p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-2">Deskripsi</label>
										<div class="col-sm-10">
											<p class="form-control-static">	: 	<?php echo $value->deskripsi_kopi ?></p>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-3">
							<div>
								ini buat komentar
							</div>
						</div>
						
					</div> -->
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

