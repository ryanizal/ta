<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="menu-content pb-60 col-lg-10">
			<div class="title text-center">
				<h1 class="mb-10">Profile Member</h1>
				<p>heres info you gave to us</p>
			</div>
		</div>
	</div>

	<section class="text-sample">
		<div class="row d-flex justify-content-center">
			<div class="col-md-5 mt-sm-30">
				<h3 class="mb-20 text-center">Nama Member</h3>
				<div class="text-center">
					<img class="img-circle" width="200" height="200" src="<?php echo base_url();?>assets/img/member/male4.png" >
				</div>
				<div class="section-gap">
					<table class="" style="font-size: 130%; word-spacing: 1px">
						<tr>
							<td >Name </td>
							<td>:	<?php echo $nama_member?></td>
						</tr>
						<tr>
							<td >Username</td>
							<td>:	<?php echo $username_member?></td>
						</tr>
						<tr>
							<td >Bio</td>
							<td>:	<?php echo $keterangan_member ?></td>
						</tr>
						
					</table>
					<div class="pull-right">
						
						<a href="<?php echo base_url()?>Member/edit_profile" class="genric-btn primary circle">Update</a>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>