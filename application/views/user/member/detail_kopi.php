<div  class="container">
	<h3 class="panel-title"> <?php echo $k['nama_kopi'] ?></h3>
	<br>
	<div class="row">
		<div class="col-md-3">
			<img src="<?php echo base_url('assets/img/coffee/'.$k['foto_1']); ?>" class="img-responsive">
		</div>
		<div class="col-md-9 single-menu">

			<form class="form-horizontal">

				<div class="form-group">
					<label class="control-label col-sm-2">Acidity</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['acidity'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Sweetness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['sweet'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Bitterness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['bitter'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Savoriness</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['savory'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Origin</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['origin'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Roast by</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['id_roaster'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Roast Profile</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['profile_roast'] ?></p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Description</label>
					<div class="col-sm-10 pull-right">
						<p class="form-control-static">: <?php echo $k['deskripsi_kopi'] ?></p>
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
				<?php print_r($komentar) ?>
			</pre> -->
			<section class="comment-list">
				<?php foreach ($komentar as $key => $value): ?>
					<article class="row">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<figure class="thumbnail">
								<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url("assets/img/member/$value[foto_member]");?>" />
								<figcaption class="text-center"><?php echo $value['username_member'] ?></figcaption>
							</figure>
						</div>
						<div class="col-md-10 col-sm-10 ">
							<div class="panel panel-default arrow left">
								<div class="panel-body ">
									<header class="text-left">
										<div class="comment-user"><i class="fa fa-user"></i> <?php echo $value['nama_member'] ?></div>
										<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo date("F d, Y", strtotime($value['waktu_komentar'])) ?></time>
									</header>
									<div class="comment-post">
										<p>
											<?php echo $value['isi_komentar'] ?>
										</p>
									</div>
									<?php if ($value['id_member'] == $id_member): ?>
										
									<p class="text-right"><a href="<?php echo base_url("Member/hapus_komentar/$k[id_kopi]/$value[id_komentar]") ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a></p>
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
</div>
</div>

</div>
