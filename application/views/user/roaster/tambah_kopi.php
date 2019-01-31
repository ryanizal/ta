<div class="container single-menu">
	<!-- <div class="section-top-border"> -->
		<div class="row">
			<div class="col-lg-12 col-md-12	">
				<h3 class="mb-30">Add Coffee</h3>
				<form method="post" enctype="multipart/form-data">
					<div class="mt-10">
						<input type="text" name="nama_kopi" placeholder="Coffee's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coffees Name'" required class="single-input">
					</div>
					<div class="mt-10">
						<input type="text" name="acidity" placeholder="Acidity" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Acidity'" required class="single-input">
					</div>
					<div class="mt-10">	
						<input type="text" name="sweet" placeholder="Sweetness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sweetness'" required class="single-input">
					</div>
					<div class="mt-10">
						<input type="text" name="bitter" placeholder="Bitterness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Bitterness'" required class="single-input">
					</div>
					<div class="mt-10">
						<input type="text" name="savory" placeholder="Savoriness" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Savoriness'" required class="single-input">
					</div>
					<div class="mt-10">
						<input type="text" name="origin" placeholder="Place of Origin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place of Origin'" required class="single-input">
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="profile_roast">
								<option value="" disabled selected>Roast Profile</option>
								
								<?php foreach ($profile_roast as $key => $value): ?>
									<option value="<?php echo $value ?>"><?php echo $value ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="jenis_kopi">
								<option value="" disabled selected>Coffee's Kind</option>
								
								<?php foreach ($jenis_kopi as $key => $value): ?>
									<option value="<?php echo $value ?>"><?php echo $value ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="proses_kopi">
								<option value="" disabled selected>Process</option>
								
								<?php foreach ($proses_kopi as $key => $value): ?>
									<option value="<?php echo $value ?>"><?php echo $value ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="mt-10">
						<textarea name="deskripsi_kopi" placeholder="About This Coffee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'About This Coffee'" required class="single-input"></textarea>
					</div>
					<div class="mt-10">
						<p>Photo's</p>
						<!-- <label class=" mt-10 control-label">Photo's</label> -->
					</div>
					<div class="mt-10">
						<input type="file" name="foto_1" class="">
						<input type="file" name="foto_2" class="">
						<input type="file" name="foto_3" class="">
					</div>

					<div class="col-lg-3 col-md-3 pull-right">
						<br>
						<br>
						<button type="submit" class="genric-btn danger circle">Cancel</button>
						<button type="submit" class="genric-btn success circle">Submit</button>
					</div>


				</form>
			</div>

		</div>
	<!-- </div> -->
</div>
