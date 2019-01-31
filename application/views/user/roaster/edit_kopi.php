<div class="container">
	<div class="section-top-border">
		<div class="row">
			<div class="col-lg-11 col-md-11	">
				<h3 class="mb-30">Update Coffee</h3>
				<form method="post" enctype="multipart/form-data">
					<div class="mt-10">
						<p>Coffee's Name</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="nama_kopi" placeholder="Coffee's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coffees Name'" required class="single-input" value="<?php echo $k['nama_kopi'] ?>">
					</div>
					
					<div class="mt-10">
						<p>Sweetness</p>
						
					</div>
					<div class="mt-10">	
						<input type="text" name="sweet" placeholder="Sweetness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sweetness'" required class="single-input" value="<?php echo $k['sweet'] ?>">
					</div>
					<div class="mt-10">
						<p>Bitter</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="bitter" placeholder="Bitterness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bitterness'" required class="single-input" value="<?php echo $k['bitter'] ?>">
					</div>
					<div class="mt-10">
						<p>Savory</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="savory" placeholder="Savoriness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Savoriness'" required class="single-input" value="<?php echo $k['savory'] ?>">
					</div>
					<div class="mt-10">
						<p>Origin</p>
						
					</div>
					<div class="mt-10">
						<input type="text" name="origin" placeholder="Place of Origin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place of Origin'" required class="single-input" value="<?php echo $k['origin'] ?>">
					</div>
					<div class="mt-10">
						<p>Roast Profile</p>
						
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="profile_roast">
								<option value="" disabled>Roast Profile</option>
								
								<?php foreach ($profile_roast as $key => $value): ?>

									<option 
									<?php  if ($value == $k['profile_roast'])
									{
										echo "selected";
									}?>
									value="<?php echo $value ?>"><?php echo $value ?> </option>
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
							<select name="jenis_kopi">
								<option value="" disabled>Coffee's Kind</option>
								
								<?php foreach ($jenis_kopi as $key => $value): ?>

									<option 
									<?php  if ($value == $k['jenis_kopi'])
									{
										echo "selected";
									}?>
									value="<?php echo $value ?>"><?php echo $value ?> </option>
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
							<select name="proses_kopi">
								<option value="" disabled>Process</option>
								
								<?php foreach ($proses_kopi as $key => $value): ?>

									<option 
									<?php  if ($value == $k['proses_kopi'])
									{
										echo "selected";
									}?>
									value="<?php echo $value ?>"><?php echo $value ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="mt-10">
						<p>About This Coffee</p>
						
					</div>
					<div class="mt-10">
						<textarea name="deskripsi_kopi" placeholder="About This Coffee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'About This Coffee'" required class="single-input"><?php echo $k['deskripsi_kopi'] ?></textarea>
					</div>
					<div class="mt-10">
						<p>Photo's</p>
						<!-- <label class=" mt-10 control-label">Photo's</label> -->
					</div>
					<div class="mt-10">

						<img src="<?php echo base_url("assets/img/coffee/$k[foto_1]") ?>" class="img-responsive" height="100">	
						<input type="file" name="foto_1" class="">
						<br>	
						<img src="<?php echo base_url("assets/img/coffee/$k[foto_2]") ?>" class="img-responsive">	
						<input type="file" name="foto_1" class="">
						<br>	
						<img src="<?php echo base_url("assets/img/coffee/$k[foto_3]") ?>" class="img-responsive">	
						<input type="file" name="foto_1" class="">
					
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
