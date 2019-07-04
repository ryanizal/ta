<div  class="container">
	<?php foreach ($k as $value):;?>
		<h3 align="center" class="panel-title"><?php echo $value->nama_kopi; ?></h3>
		<div class="pull-right">
			<!-- <a href="<?php echo base_url('roaster/list_kopi');?>"><p> back to list </p></a> -->
		</div>
		<br>
		<div class="row single-menu">
			<div class="col-md-3">
				<img src="<?php echo base_url().$value->foto->first()->path_foto; ?>" class="img-fluid">
			</div>
			<div class="col-md-9 single-menu-kom">

				<form class="form-horizontal ">
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
									<?php echo $level?>% Savoryness
									
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Origin</label>
						<div class="col-sm-10 pull-right">
							<p class="form-control-static">: <?php echo $value->origin;?></p>
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
							<label class="control-label col-sm-2">Roast Profile</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $value->profil->nama_roast_prof;?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Roast by</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $value->roaster->nama_roaster; ?></p>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Description</label>
							<div class="col-sm-10 pull-right">
								<p class="form-control-static">: <?php echo $value->deskripsi_kopi; ?></p>
							</div>
						</div>
					</form>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="section-top-border">
			<h3>Comments:</h3>
			<br>
			<div class="col-md-10">
				<section class="comment-list">
					<!-- First Comment -->
					<article class="row single-menu-kom">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<figure class="thumbnail">
								<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url();?>assets/img/member/male4.png" />
								<figcaption class="text-center">username</figcaption>
							</figure>
						</div>
						<div class="col-md-10 col-sm-10">
							<div class="panel panel-default arrow left">
								<div class="panel-body">
									<header class="text-left">
										<div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
										<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
									</header>
									<div class="comment-post">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>
									<p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
								</div>
							</div>
						</div>
					</article>


				</section>
			</div>
			<div class="widget-area no-padding blank col-md-10">
				<div class="status-upload">
					<form>
						<textarea placeholder="Say Something About This Coffee..." ></textarea>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
					</form>
				</div><!-- Status Upload  -->
			</div><!-- Widget Area -->

		</div>
	</div>
</div>

</div>