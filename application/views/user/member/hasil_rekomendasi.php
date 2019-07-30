<div class="container" >
	<h1>Recomendation Result's :</h1>
	<hr>
	<?php
	for ($i=0;$i<count($kopi_rangking);$i++) {
		if ($i==5) {
			break;
		}
		?>
		<h4 align="center" class="panel-title"> <?php echo $kopi_rangking[$i][0]->nama_kopi?></h4>
		<br>
		<div class="row single-menu">
			<div class="col-md-3">
				<a href="<?php echo base_url('Member/detail_kopi/').$kopi_rangking[$i][0]->id_kopi?>">
					<img src="<?php echo base_url().$kopi_rangking[$i][0]->foto->first()->path_foto; ?>" class="img-fluid" height="300" weight="300">	
				</a>
				
			</div>
			<div class="col-md-9">
				<form class="form-horizontal">
					<a href="<?php echo base_url('Member/detail_kopi/').$kopi_rangking[$i][0]->id_kopi?>">
						<div class="form-group">
							<label class="control-label col-sm-2">Variety </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $kopi_rangking[$i][0]->jenis->jenis_kopi ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Process </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $kopi_rangking[$i][0]->proses->nama_proses ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Roast Profile </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $kopi_rangking[$i][0]->profil->nama_roast_prof ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Roasted By </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $kopi_rangking[$i][0]->roaster->nama_roaster ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Description </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $kopi_rangking[$i][0]->deskripsi_kopi ?></p>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="control-label col-sm-2">Rank </label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $hasil_rangking[$i][0] ?></p>
							</div>
						</div> -->
					</a>
				</form>

			</div>
			<hr>
			<div class="col-md-1 single-counter">

			</div>
		</div>
		<hr>
	<?php } ?>
</div>

