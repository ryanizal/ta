<div class="container">
	<h3 class="panel-title">
		Here's Your Recomendation
	</h3>
	<br>
	<div class="row">
		<div class="col-md-12 mb-20">
			<!-- <p>Your recomendation is calculated from your criteria's input in <a href="<?php echo base_url('Member/rekomendasi') ?>">recomedation</a> page's</p> -->
			<hr>
		</div>
		<div class="col-md-12 mb-10">
			<h5 class="mb-50">Best Result :  </h5>
			<?php
			for ($i=0;$i<count($kopi_rangking);$i++) {
				?>
				<br>
				<div class="row">
					<a href="<?php echo base_url('Member/detail_kopi/'.$kopi_rangking[$i][0]->id_kopi);?>">
						<div class="col-lg-8 col-md-8 single-menu">
							<h4 class="text-center">
								<?php echo $kopi_rangking[$i][0]->nama_kopi; ?>

							</h4>
							<img class="img-fluid" src="<?php echo base_url().$kopi_rangking[$i][0]->foto->first()->path_foto;?>" alt="">
							<span class="genric-btn primary-border small">
								<?php echo $kopi_rangking[$i][0]->jenis->jenis_kopi;?>
							</span>

							<span class="genric-btn primary-border small">
								<?php echo $kopi_rangking[$i][0]->profil->nama_roast_prof;?>
							</span>

							<span class="genric-btn primary-border small">
								<?php echo $kopi_rangking[$i][0]->proses->nama_proses;?>
							</span>

							
							<p>
								<b>description</b>   <?php echo $kopi_rangking[$i][0]->deskripsi_kopi ?>
							</p>
							<!-- <span class="genric-btn primary-border small">
								<?php echo $kopi_rangking[$i][0]->origin;?>
							</span> -->
							<p>nilai kecocokan :<?php echo $hasil_rangking[$i]; ?></p>
							<p class="post-date">Roasted by <a href=""><?php echo $kopi_rangking[$i][0]->roaster->nama_roaster ?></a></p>

						</div>
					</a>
				</div>
				<hr>
				<?php
			}
			?>
		</div>
	</div>
</div>