<div  class="container" >
	
	<div class="section-top-border">
		<h1 class="mb-30">Search Results : </h1>


		<?php foreach ($kopi as $key => $value) : ?>
			<div class="row single-menu">
				<div class="col-md-3">
					<h3 class="mb-30"><?php echo $value['nama_kopi'] ?></h3>
					<a href="">
						<img src="<?php echo base_url('assets/img/coffee/').$value['foto_1']; ?>" alt="" class="img-fluid">
					</a>
				</div>
				<div class="col-md-9 mt-sm-20 ">
					<p><b>Origin	:</b> <?php echo $value['origin'] ?></p>
					<p><b>Type	:</b> <?php echo $value['jenis_kopi'] ?></p>
					<p><b>Process	:</b> <?php echo $value['proses_kopi'] ?></p>
					<p><b>About This coffee :</b> <?php echo $value['deskripsi_kopi'] ?></p>
				</div>
			</div>

		<?php endforeach ?>

	</div>
</div>