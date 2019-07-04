<div  class="container">
	<?php foreach ($kopi as $value) :;?>
		<h3 class="panel-title"> <?php echo $value->nama_kopi ?></h3>
		<br>
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url().$value->foto->first()->path_foto; ?>" class="img-fluid">
			</div>
			<div class="col-md-9 single-menu">

				<form class="form-horizontal">

					<div class="form-group">
						<label class="control-label col-sm-2">Acidity</label>
						<div class="col-sm-10 pull-right">
							<div class="progress">
								<?php 
								$max = 2;
								$isi = $value->acidity/9*100;
								$level = substr($isi, 0, $max);
								?>
								<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
									<?php echo $level?>% Acidity
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Sweetness</label>
							<div class="col-sm-10 pull-right">
								<div class="progress">
									<?php 
									$max = 2;
									$isi = $value->sweet/9*100;
									$level = substr($isi, 0, $max);
									?>
									<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
										<?php echo $level?>% Sweetness
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Bitterness</label>
							<div class="col-sm-10 pull-right">
								<div class="progress">
									<?php 
									$max = 2;
									$isi = $value->bitter/9*100;
									$level = substr($isi, 0, $max);
									?>
									<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
										<?php echo $level?>% Bitterness
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Savoriness</label>
							<div class="col-sm-10 pull-right">
								<div class="progress">
									<?php 
									$max = 2;
									$isi = $value->savory/9*100;
									$level = substr($isi, 0, $max);
									?>
									<div class="progress-bar" role="progressbar" style="width: <?php echo $level;?>%" aria-valuenow="<?php echo $level; ?>" aria-valuemin="0" aria-valuemax="100">
										<?php echo $level?>% Savoriness
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Origin</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $value->origin ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Roast Profile</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $value->profil->nama_roast_prof?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Variety</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">:  <?php echo $value->jenis->jenis_kopi; ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Notes	</label>
							<div class="col-sm-10 pull-right">

								<p class="form-control-static">
									<?php foreach ($value->tastes as $taste): ?>
										-  <?php echo $taste->nama_tastes; ?></p>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Roast by</label>
								<div class="col-sm-10 pull-right">
									<p class="form-control-static">: <?php echo $value->roaster->nama_roaster ?></p>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Description</label>
								<div class="col-sm-10 pull-right">
									<p class="form-control-static">: <?php echo $value->deskripsi_kopi ?></p>
								</div>
							</div>
						</form>

					</div>
				</div>

				<div class="section-top-border">
					<h3>Comments:</h3>
					<br>
					<div class="col-md-10">
			<!-- <pre>
				<?php print_r($kopiomentar) ?>
			</pre> -->
			<section class="comment-list">
				<?php foreach ($komentar as $value): ?>
					<article class="row">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<figure class="thumbnail">
								<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url().$value->komentar_member->foto_member;?>" />
								<figcaption class="text-center"><?php echo $value->komentar_member->username_member; ?></figcaption>
							</figure>
						</div>
						<div class="col-md-10 col-sm-10 ">
							<div class="panel panel-default arrow left">
								<div class="panel-body ">
									<header class="text-left">
										<div class="comment-user"><i class="fa fa-user"></i> <?php echo $value->komentar_member->nama_member; ?></div>
										<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo date("F d, Y", strtotime($value->komentar_member->waktu_komentar)) ;?></time>
									</header>
									<div class="comment-post">
										<p>
											<?php echo $value->komentar_member->isi_komentar; ?>
										</p>
									</div>
									<?php if ($value['id_member'] == $id_member): ?>
										
										<p class="text-right"><a href="<?php echo base_url("Member/hapus_komentar/$kopi[id_kopi]/$value[id_komentar]") ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a></p>
									<?php endif ?>
								</div>
							</div>
						</div>
					</article>
					<hr>
				<?php endforeach ?>

			</section>
		</div>
		<div class="widget-area no-padding blank col-md-10 ">
			<div class="status-upload single-menu-kom">
				<form method="post">
					<textarea placeholder="Say Something About This Coffee..." name="isi_komentar"></textarea>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
					<!-- <a href="adipisicing"><p>asdakdjadsj</p></a> -->
				</form>
			</div><!-- Status Upload  -->
		</div><!-- Widget Area -->
		<hr>
	</div>
<?php 	endforeach; ?>
</div>
</div>

</div>
