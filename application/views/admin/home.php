<style type="text/css">
.single-menu {
	
	background-color: #803213d6;
	color: #000;
	
	box-shadow: 0px 10px 30px 0px rgba(182, 136, 52, 0.2);
	border-radius: 10px;
	padding: 30px 30px;
	margin-bottom: 30px;
}
.clickable {
	display: block;
	text-decoration: none;
	color: #000;
}
</style>
<div id="page-wrapper">
	<ol class="breadcrumb">
		<li class="active"><a href="<?php echo base_url("administrator/Home") ?>">Home</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>MAIN MENU</h3>
		</div>

		<div class="panel-body">
			<!-- <div class="col text-center">
				<a href="<?php echo base_url("administrator/Coffee") ?>"><button class="btn btn-success">Coffee</button></a>
				<a href="<?php echo base_url("administrator/Roaster") ?>"><button class="btn btn-success">Roaster</button></a>
				<a href="<?php echo base_url("administrator/Member") ?>" ><button class="btn btn-success">Member</button></a>
			</div> -->

			<div class="row counter-row">
			
					<br>
					<div class=" col-sm-2 single-counter">
					</div>
					<div class=" col-sm-2 single-counter single-menu text-center btn-group">
						<a href="<?php echo base_url('administrator/Member'); ?>" class="clickable">
							<h1 class="counter"><?php echo $member; ?></h1>
							<div class="icon">
								<i class="fa fa-users fa-5x"></i>
							</div>
							<p>Total Member</p>

						</a>

					</div>
					<div class=" col-sm-1 single-counter">
					</div>
					<div class="col-sm-2 single-counter single-menu text-center">
						<a href="<?php echo base_url('administrator/Roaster'); ?>" class="clickable">

							<h1 class="counter"><?php echo $roaster; ?></h1>
							<div class="icon">
								<i class="fa fa-registered fa-5x"></i>
							</div>
							<p>Total Roaster</p>
						</a>
					</div>
					<div class="col-sm-1 single-counter ">
					</div>
					<div class="col-sm-2 single-counter single-menu text-center">
						<a href="<?php echo base_url('administrator/Coffee'); ?>" class="clickable">
							<h1 class="counter"><?php echo $kopi; ?></h1>
							<div class="icon">
								<i class="fa fa-archive fa-5x"></i>
							</div>
							<p>Total Coffee </p>
						</a>
					</div>
					<div class=" col-sm-2 single-counter">
					</div>
				
			</div>
		</div>
	</div>
</div>