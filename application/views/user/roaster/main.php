
<section class="text-sample">
	<div class="container">
		<h3 class="text-heading">Welcome, <?php echo $nama_roaster?></h3>
		<p><b><?php echo date("D"); ?></b> <?php echo date("Y M d"); ?></p>
	</div>
	<div class="container">
		

		<div class="row counter-row">
			<div class="col-lg-3 col-md-3 single-counter single-menu text-center">
				<h1 class="counter">123</h1>
				<div class="icon">
					<i class="fa fa-eye fa-5x"></i>
					
				</div>
				<p>Total Products View</p>
			</div>

			<div class="col-lg-1 col-md-1 single-counter ">

			</div>

			<div class="col-lg-3 col-md-3 single-counter single-menu text-center">
				<h1 class="counter">321</h1>
				<div class="icon">
					<i class="fa fa-comments fa-5x"></i>
					
				</div>
				<p>Total Comment's on your Product</p>
			</div>

			<div class="col-lg-1 col-md-1 single-counter ">

			</div>
			<div class="col-lg-3 col-md-3 single-counter single-menu text-center">
				<h1 class="counter"><?php echo $total_produk; ?></h1>
				<div class="icon">
					<i class="fa fa-archive fa-5x"></i>
					
				</div>
				<p>Total Product </p>

			</div>

		</div>
	</div>
</section>



<div class="container">
	<div class="section-top-border">
		<h1 class="mb-30">Latest Product From You : </h1>

		<?php foreach ($new as $value): ?>

			<h3 class="mb-30"><?php echo $value->nama_kopi; ?> </h3>
			<div class="row single-menu">
				<div class="col-md-3">
					<a href="<?php echo base_url('Roaster/detail_kopi/'.$value->id_kopi); ?>"><img src="<?php echo $value->foto->first()->path_foto;?>" alt="" class="img-fluid"></a>
				</div>
				<div class="col-md-9 mt-sm-20">
					<p><b>Deskripsi kopi</b> <?php echo $value->deskripsi_kopi; ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>



