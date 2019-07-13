<div  class="container" >
	<h1>Search Result :</h1>
	<hr>
	<div class="row">
		<?php foreach ($k as $value): ?>
			<div class="col-md-3 single-menu text-center">
				<a href="<?php echo base_url('Roaster/detail_kopi/').$value->id_kopi ?>">
					<h4 align="center" class="panel-title"> <?php echo $value->nama_kopi?></h4>
					<img src="<?php echo base_url().$value->foto->first()->path_foto; ?>" class="img-fluid">
					<br>
				</a>
			</div>
			<div class="col-md-1 single-counter">

			</div>
		<?php endforeach; ?>
	</div>
</div>