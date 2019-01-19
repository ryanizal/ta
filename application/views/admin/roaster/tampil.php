<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12 text-right">
			<ol class="breadcrumb">
				<li><a href="">Home</a></li>
				<li class="active"><a href="">Roaster</a></li>
			</ol>
			
		</div>
		
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>DATA ROASTER</h3>
			
		</div>

		<div class="panel-body">
			<div style="margin-bottom: 0em">
				<div class="row">
					<div class="col-md-3 col-md-push-9 text-right">
						<a class="btn btn-primary" href="<?php echo base_url();?>administrator/roaster/tambah">Tambah Roaster</a>
						
					</div>
				</div>
			</div>
			<br>
			<br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Roaster</th>
						<th>Deskripsi</th>
						<th>Alamat</th>
						<th>No Telp</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($roaster as $key => $value): ?>
						<tr>
							<td><?php echo $key+1 ?></td>
							<td><?php echo $value['nama_roaster'] ?></td>
							<td><?php echo $value['deskripsi_roaster'] ?></td>
							<td><?php echo $value['alamat_roaster'] ?></td>
							<td><?php echo $value['telp_roaster'] ?></td>
							<td>
								<!-- <a href="" class="btn btn-info btn-sm"> Detail</a> -->
								<a href="<?php echo base_url('administrator/roaster/edit/'.$value['id_roaster']);?>" class="btn btn-warning btn-xs"> Ubah</a>
								<a href="<?php echo base_url('administrator/roaster/hapus/'.$value['id_roaster']);?>" class="btn btn-danger btn-xs"> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>

				</tbody>
			</table>
		</div>
	</div>
</div>