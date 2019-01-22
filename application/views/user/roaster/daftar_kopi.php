<div class="container">
	
	<h3 class="mb-30">List of Your Coffee</h3>
	<div class="progress-table-wrap">
		<div class="pull-right">
			<a href="<?php echo base_url('Roaster/tambah_kopi/');?>" class="genric-btn primary circle col-md-offset-11">Add Coffee</a>
			<br>
			<br>
		</div>
		<div class="progress-table">
			<!-- <br> -->
			<table class="table table-bordered">
				<thead>

					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Acidity</th>
						<th>Sweetness</th>
						<th>Bitterness</th>
						<th>Savory</th>
						<th>Origin</th>
						<th>Roast profile</th>
						<th>Roasterd by</th>						
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					<?php foreach ($kopi as $key => $value): ?>
					
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $value['nama_kopi'] ?></td>
						<td><?php echo $value['acidity'] ?></td>
						<td><?php echo $value['sweet'] ?></td>
						<td><?php echo $value['bitter'] ?></td>
						<td><?php echo $value['savory'] ?></td>
						<td><?php echo $value['origin'] ?></td>
						<td><?php echo $value['profile_roast'] ?></td>
						<td><?php echo $value['id_roaster'] ?></td>
						<td>
							<a href="<?php echo base_url('Roaster/detail_kopi/'.$value['id_kopi']);?>" class="btn btn-info btn-sm"> Detail</a>
							<a href="<?php echo base_url('Roaster/edit_kopi/'.$value['id_kopi']);?>" class="btn btn-warning btn-sm"> Edit</a>
							<a href="<?php echo base_url('Roaster/hapus_kopi/'.$value['id_kopi']);?>" class="btn btn-danger btn-sm"> Delete</a>
						</td>
					</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>
	
</div>