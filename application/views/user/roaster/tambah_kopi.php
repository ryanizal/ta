<div class="container single-menu">
	<!-- <div class="section-top-border"> -->
		<div class="row">
			<div class="col-lg-12 col-md-12	">
				<h3 class="mb-30">Add Coffee</h3>
				<form method="post" enctype="multipart/form-data">
					<?php if ($eror):?>
						<div class="alert alert-danger col-md-12"><?php echo $eror; ?></div>
					<?php endif ?>
					<div class="mt-10">
						<p>Coffee's Name</p>
					</div>
					<div class="mt-10">
						<input type="text" name="nama_kopi" placeholder="Coffee's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Coffees Name'" class="single-input">
					</div>
					<div class="mt-10 mb-20">
						<p>Acidity</p>
					</div>
					<div class="mt-10 mb-20">
						<div class="range">
							<input name="acidity" type="range" min="1" max="9" steps="1" value="1">
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
					<div class="mt-10 mb-20">
						<p>Sweetness</p>
					</div>
					<div class="mt-10 mb-20">
						<div class="range">
							<input name="sweet" type="range" min="1" max="9" steps="1" value="1">
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
					<div class="mt-10 mb-20">
						<p>Savoriness</p>
					</div>
					<div class="mt-10 mb-20">
						<div class="range">
							<input name="savory" type="range" min="1" max="9" steps="1" value="1">
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
					<div class="mt-10 mb-20">
						<p>Bitterness</p>
					</div>
					<div class="mt-10 mb-20">
						<div class="range">
							<input type="range" name="bitter" min="1" max="9" steps="1" value="1">
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
						<p>Place Of Origin</p>
					</div>
					<div class="mt-10">
						<input type="text" name="origin" placeholder="Place of Origin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Place of Origin'" class="single-input">
					</div>
					<div class="mt-10">
						<p>Roast Profile</p>
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="roast_prof_id_roast_prof">
								<option value="" disabled selected>Roast Profile</option>
								
								<?php foreach ($profile_roast as $key => $value): ?>
									<option value="<?php echo $value->id_roast_prof ?>"><?php echo $value->nama_roast_prof ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="mt-10">
						<p>Variety</p>
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select"">
							<select name="jenis_kopi_id_jenis_kopi">
								<option value="" disabled selected>Variety</option>
								
								<?php foreach ($jenis_kopi as $key => $value): ?>
									<option value="<?php echo $value->id_jenis_kopi ?>"><?php echo $value->jenis_kopi ?> </option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="mt-10">
						<p>Process</p>
					</div>
					<div class="input-group-icon mt-10">
						<div class="icon"><i class="fa fa-fire" aria-hidden="true"></i></div>
						<div class="form-select" id="default-select">
							<select name="proses_kopi_id_proses_kopi">
								<option value="" disabled selected>Process</option>
								
								<?php foreach ($proses_kopi as $key => $value): ?>
									<option value="<?php echo $value->id_proses_kopi ?>"><?php echo $value->nama_proses ?> </option>
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
									<select name="tastes[]" required="required">
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
						<p>Description</p>
					</div>
					<div class="mt-10">
						<textarea id="textareaChars" name="deskripsi_kopi" placeholder="About This Coffee" onfocus="this.placeholder = ''" onblur="this.placeholder = 'About This Coffee'" class="single-input" maxlength="500"></textarea>
						<span id="chars">500</span> characters remaining
					</div>
					<div class="mt-10">
						<p>Photo's</p>
					</div>
					<!-- <div class="form-group" id="dynamic_field2">
						<div class="row">
							<div class="mt-10 col-md-7" >
								<input type="file" name="nama_foto[]" class="">
								<button type="button" class="addp2 genric-btn info circle" title="Add More"> + </button>
								<button type="button" class="removep2 genric-btn danger circle" title="Remove"> x </button>
							</div>
						</div>
					</div> -->
					<div class="file-uploader">
						<input type="file" name="photos" class="fileuploader-area">
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


