
<section class="text-sample">
	<div class="container">
		<h3 class="text-heading">Welcome, <?php echo $nama_roaster?></h3>
		<p><b><?php echo date("D"); ?></b> <?php echo date("Y M d"); ?></p>
	</div>
</section>

<div class="container">
	<div class="section-top-border">
		<h1 class="mb-30">Latest Product From You : </h1>

		<?php foreach ($new as $key => $value): ?>

			<h3 class="mb-30"><?php echo $value['nama_kopi']; ?> </h3>
			<div class="row">
				<div class="col-md-3">
					<a href="#"><img src="<?php echo base_url('assets/img/coffee/'.$value['foto_1']);?>" alt="" class="img-fluid"></a>
				</div>
				<div class="col-md-9 mt-sm-20">
					<p><b>Deskripsi kopi</b> | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>



