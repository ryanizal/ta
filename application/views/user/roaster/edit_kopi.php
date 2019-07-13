<div class="container">
	<div class="section-top-border">
		<div class="row">
			<div class="col-lg-11 col-md-11 single-menu	">
				<h3 class="mb-30">Update Coffee</h3>
				<form method="post" enctype="multipart/form-data">
					<div class="mt-10">
						<p>Coffee's Name</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="nama_kopi" placeholder="Coffee's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coffees Name'" required class="single-input" value="<?php echo $kopi->nama_kopi ?>">
					</div>
					
					<div class="mt-10">
						<p>Sweetness</p>
						
					</div>
					<div class="mt-10">	
						<input type="text" name="sweet" placeholder="Sweetness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sweetness'" required class="single-input" value="<?php echo $kopi->sweet ?>">
					</div>
					<div class="mt-10">
						<p>Bitter</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="bitter" placeholder="Bitterness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bitterness'" required class="single-input" value="<?php echo $kopi->bitter ?>">
					</div>
					<div class="mt-10">
						<p>Savory</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="savory" placeholder="Savoriness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Savoriness'" required class="single-input" value="<?php echo $kopi->savory ?>">
					</div>
					<div class="mt-10">
						<p>Origin</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="origin" placeholder="Place of Origin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place of Origin'" required class="single-input" value="<?php echo $kopi->origin ?>">
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
								<option value="" disabled>Coffee's Kind</option>
								
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
						<p>Tastes</p>
						
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="tastes">
								<?php foreach ($tastes as $tt): ?>
									<option value="" disabled>Tastes</option>

									<option 
									<?php if ($kopi->tastes->firstWhere('id_tastes', $tt->id_tastes)) {
										echo "selected";
									}?>
									value="<?php echo $tt->id_tastes ?>"><?php echo $tt->nama_tastes ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="mt-10">
						<p>About This Coffee</p>
						
					</div>
					<div class="mt-10">
						<textarea name="deskripsi_kopi" placeholder="About This Coffee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'About This Coffee'" required class="single-input"><?php echo $kopi->deskripsi_kopi ?></textarea>
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
								window.history.back()
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
