<div class="container">
	<div class="section-top-border">
		<div class="row">
			<div class="col-lg-11 col-md-11 single-menu	">
				<h3 class="mb-30">Update Coffee</h3>
				<?php if ($eror):?>
					<div class="alert alert-danger col-md-12"><?php echo $eror; ?></div>
				<?php endif ?>
				<form method="post" enctype="multipart/form-data">
					<div class="mt-10">
						<p>Coffee's Name</p>
					</div>
					<div class="mt-10">
						<input type="text" name="nama_kopi" placeholder="Coffee's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coffees Name'" class="single-input" value="<?php echo $kopi->nama_kopi ?>">
					</div>
					
					<div class="mt-20">
						<p>Acidity</p>
					</div>
					<div class="mt-20 mb-20">
						<div class="range">
							<input name="acidity" type="range" min="1" max="9" steps="1" value="<?php echo $kopi->acidity ?>">
						</div>

						<ul class="range-labels">
							<li class="active selected">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
						</ul>
					</div>
					<br>
					<div class="mt-20">
						<p>Sweetness</p>
					</div>
					<div class="mt-20 mb-20">
						<div class="range">
							<input name="sweet" type="range" min="1" max="9" steps="1" value="<?php echo $kopi->sweet ?>">
						</div>

						<ul class="range-labels">
							<li class="active selected">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
						</ul>
					</div>
					<br>
					<div class="mt-20">
						<p>Savory</p>
						
					</div>
					<div class="mt-20 mb-20">
						<div class="range">
							<input name="savory" type="range" min="1" max="9" steps="1" value="<?php echo $kopi->savory ?>">
						</div>

						<ul class="range-labels">
							<li class="active selected">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
						</ul>
					</div>
					<br>
					<div class="mt-20">
						<p>Bitterness</p>
						
					</div>
					<div class="mt-20 mb-20">
						<div class="range">
							<input name="bitter" type="range" min="1" max="9" steps="1" value="<?php echo $kopi->bitter ?>">
						</div>

						<ul class="range-labels">
							<li class="active selected">1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li>8</li>
							<li>9</li>
						</ul>
					</div>
					<br>
					<div class="mt-10">
						<p>Origin</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="origin" placeholder="Place of Origin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place of Origin'" class="single-input" value="<?php echo $kopi->origin ?>">
					</div>
					<div class="mt-10">
						<p>Roast Profile</p>
						
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="roast_prof_id_roast_prof">
								<option value="" disabled>Roast Profile</option>
								
								<?php foreach ($profile_roast as $pr): ?>

									<option 
									<?php  if ($pr->id_roast_prof == $kopi->profil->id_roast_prof)
									{
										echo "selected";
									}?>
									value="<?php echo $pr->id_roast_prof ?>"><?php echo $pr->nama_roast_prof ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="mt-10">
						<p>Coffee's Kind</p>
						
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="jenis_kopi_id_jenis_kopi">
								<option value="" disabled>Variety</option>
								
								<?php foreach ($jenis_kopi as $jk): ?>

									<option 
									<?php  if ($jk->id_jenis_kopi == $kopi->jenis->id_jenis_kopi)
									{
										echo "selected";
									}?>
									value="<?php echo $jk->id_jenis_kopi ?>"><?php echo $jk->jenis_kopi ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="mt-10">
						<p>Process</p>
						
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="proses_kopi_id_proses_kopi">
								<option value="" disabled>Process</option>
								
								<?php foreach ($proses_kopi as $pk): ?>

									<option 
									<?php  if ($pk->id_proses_kopi == $kopi->proses->id_proses_kopi)
									{
										echo "selected";
									}?>
									value="<?php echo $pk->id_proses_kopi ?>"><?php echo $pk->nama_proses ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="mt-10">
						<p>Taste Note's</p>
						
					</div>
					<div class="form-group" id="dynamic_field">
						<div class="row">
							<div class="input-group-icon mt-10 col-md-4">
								<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select name="tastes[]">
										<!-- <option value="" disabled selected>Taste Note's</option> -->
										<?php foreach ($tastes as $value): ?>
											<!-- <option value="" disabled selected>Taste Note's</option> -->
											<option value="<?php echo $value->id_tastes ?>"><?php echo $value->nama_tastes ?> </option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
							<div class="col-md-5 mt-15">
								<button type="button" class="addp genric-btn info circle small" title="Add More"> + </button>
								<button type="button" class="removep genric-btn danger circle small" title="Remove"> x </button>
							</div>	
						</div>
					</div>

					<div class="mt-10">
						<p>About This Coffee</p>
						
					</div>
					<div class="mt-10">
						<textarea name="deskripsi_kopi" placeholder="About This Coffee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'About This Coffee'" class="single-input"><?php echo $kopi->deskripsi_kopi ?></textarea>
					</div>
					<div class="mt-10">
						<p>Photo's</p>

						<div class="file-uploader">
							<input type="file" name="photos" class="fileuploader-area" data-fileuploader-files='<?php echo isset($photos) && count($photos) > 0 ? json_encode($photos) : null ?>'>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 pull-right">
						<br>
						<br>
						<script>
							function goBack() 
							{
								window.onbeforeunload = function(){
									return 'Are you sure you want to leave?';
								};
							}
							
						</script>
						<button onclick="goBack()" class="genric-btn danger circle">Cancel</button>
						<button type="submit" class="genric-btn success circle">Submit</button>
					</div>


				</form>
			</div>

		</div>
	</div>
</div>
<script>
	var counter = 0;
	$('.addp').click(function () {
		console.log($(this));
		var fg = $(this).parent().parent().clone(true, true);
		counter++;
		if (counter<5)
			$('#dynamic_field').append(fg);
	});

	$('.removep').click(function () {
		if ($('#dynamic_field > div').length > 1) {
			$(this).parent().parent().remove();
		}
	});
</script>