<div  class="container">
	<?php foreach ($kopi as $value) :;?>
		<h3 class="panel-title text-center"> <?php echo $value->nama_kopi ?></h3>
		<br>
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<div class="fotocls col-md-12"> 
						<?php
						$image = $value->foto->first()['path_foto'];
						if (empty($image)){
							?>
							<img src= "<?php echo base_url('assets/img/np.png');?>" class="img-responsive">
							<?php
							
						}else{
							foreach ($value->foto as $rowfoto):
								?>
								<img src= "<?php echo base_url().$rowfoto->path_foto;?>" class="img-responsive">
								<?php
							endforeach;
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-9 single-menu">

				<form class="form-horizontal">

					<div class="form-group">
						<label class="control-label col-sm-2">Acidity</label>
						<div class="col-sm-10 pull-right">
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
						<div class="col-sm-10 pull-right">
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
						<div class="col-sm-10 pull-right">
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
						<div class="col-sm-10 pull-right">
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
									<?php echo $taste->nama_tastes; ?>, 
								<?php endforeach; ?>
							</p>
						</div>
					</div>
					<!-- <div class="form-group">
						<label class="control-label col-sm-2">Roast by</label>
						<div class="col-sm-10 pull-right">
							<a class="genric-btn primary-border small disable"> <p class="form-control-static"><?php echo $value->roaster->nama_roaster ?></p></a>
						</div>
					</div> -->
					<div class="form-group">
						<label class="control-label col-sm-2">Description</label>
						<div class="col-sm-10 pull-right">
							<p class="form-control-static">: <?php echo $value->deskripsi_kopi ?></p>
						</div>
					</div>
				</form>
			<?php endforeach; ?>
		</div>
	</div>
	<?php if ($value->roaster_id_roaster == $id_roaster): ?>
		<div class="pull-right">
			<a class="genric-btn primary" href="<?php echo base_url('Roaster/edit_kopi/'.$value['id_kopi']) ?>">Edit Coffee</a> 
		</div>
	<?php endif; ?>

	<div class="section-top-border">
		<div class="single-menu">
			<h3>Comments:</h3>
			<?php echo $this->session->flashdata('pesan'); ?> 
			<br>
			<!-- <?php if ($komentar == NULL) {
				echo "<p>	belum ada komentar</p>";
			} ?> -->
			<?php foreach ($komentar as $value): ?>
				<div class="card">

					<div class="card-body">
						<?php 
						if ($value == NULL) {
							echo "No one comment id this coffee yet, be the first!";
						}
						?>
						<div class="row mb-50">
							<div class="col-md-2">
								<img src="<?php echo base_url('assets/img/').($value->member ? 'member/'.$value->member['foto_member'] : 'roaster/'.$value->roaster['foto_roaster']);?>" class="img img-rounded img-fluid"/>
								<br>
								<p class="text-secondary text-center mt-10"><?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->waktu_komentar)->diffForHumans(); ?></p>
							</div>
							<div class="col-md-10">
								<h5>
									<a class="float-left" href=""><strong><?php echo $value->member ? $value->member->nama_member : $value->roaster->nama_roaster; ?></strong></a>
								</h5>
								<br>
								<div class="clearfix"></div>
								<p><b>Says :	</b><?php echo $value->isi_komentar; ?></p>
							</div>
						</div>
						<?php if ($value->roaster_id_roaster == $id_roaster): ?>
							<div class="pull-right">
								<a href="<?php echo base_url("Roaster/hapus_komentar/$value->kopi_id_kopi/$value->id_komentar") ?>" class="genric-btn danger circle"  onclick="javascript: return confirm('Delete this Comment ?')">
									Delete
								</a>
							</div>
						<?php endif ?>
					</div>
				</div>
				<br>
			<?php endforeach; ?>
				<!-- <div class="col-md-10">			
					<section class="comment-list">
						<?php foreach ($komentar as $value): ?>
							<article class="row">
								<div class="col-md-2 col-sm-2 hidden-xs">
									<figure class="thumbnail">
										<img class="img-responsive img-circle" height="100" width="100" src="<?php echo base_url('assets/img/').($value->member ? 'member/'.$value->member['foto_member'] : 'roaster/'.$value->roaster['foto_roaster']);?>" />
										<figcaption class="text-center"><?php echo $value->member ? $value->member->username_member : $value->roaster->username_roaster; ?></figcaption>
									</figure>
								</div>
								<div class="col-md-10 col-sm-10 ">
									<div class="panel panel-default arrow left">
										<div class="panel-body ">
											<header class="text-left">
												<div class="comment-user"><i class="fa fa-user"></i> <?php echo $value->member ? $value->member->nama_member : $value->roaster->nama_roaster; ?></div>
												<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo date("F d, Y", strtotime($value->waktu_komentar)) ;?></time>
											</header>
											<div class="comment-post">
												<p>
													<?php echo $value->isi_komentar; ?>
												</p>
											</div>

											<?php if ($value->member_id_member == $id_member): ?>
												
												<p class="text-right"><a href="<?php echo base_url("Member/hapus_komentar/$value->kopi_id_kopi/$value->id_komentar") ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a></p>
											<?php endif ?>
										</div>
									</div>
								</div>
							</article>
							<hr>
						<?php endforeach ?>
					</section>
				</div> -->
				<div class="widget-area blank col-md-12 pull-right">
					<div class="status-upload single-menu-kom">
						<form method="post">
							<textarea placeholder="Say Something About This Coffee..." name="isi_komentar" style="font-size: 20px"></textarea>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
							<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>


