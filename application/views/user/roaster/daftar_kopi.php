<div class="container single-menu">
	
	<h3 class="mb-30">List of Your Coffee</h3>
	<?php echo $this->session->flashdata('pesan'); ?> 
	
	<div class="progress-table-wrap">
		<div class="pull-right">
			<a href="<?php echo base_url('Roaster/tambah_kopi/');?>" class="genric-btn primary circle col-md-offset-11">Add Coffee</a>
			<br>
			<br>
		</div>
		<table class="table table-bordered" id="dtab">
			<thead>

				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Origin</th>
					<th>Roast profile</th>
					<th>Coffee's Kind</th>
					<th>Process</th>
					<!-- <th>Roasterd by</th>						 -->
					<th width="12%">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				<?php foreach ($new as $value): ?>
					
					<tr>
						<td><?php echo $no++ ?></td> 
						<td><?php echo $value->nama_kopi; ?></td>
						<td><?php echo $value->origin; ?></td>
						<td><?php echo $value->profil->nama_roast_prof ;?></td>
						<td><?php echo $value->jenis->jenis_kopi ;?></td>
						<td><?php echo $value->proses->nama_proses; ?></td> 
						<!-- <td><?php echo $value['id_roaster'] ?></td> -->
						<td>
							<a href="<?php echo base_url('Roaster/detail_kopi/'.$value['id_kopi']);?>" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
							<a href="<?php echo base_url('Roaster/edit_kopi/'.$value['id_kopi']);?>" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
							<a href="<?php echo base_url('Roaster/hapus_kopi/'.$value['id_kopi']);?>" onclick="javascript: return confirm('Delete this Coffee ?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
	</div>
	
</div>