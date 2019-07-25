<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li class="active"><a href="<?php echo base_url('administrator/Coffee'); ?>">KOPI</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>DAFTAR KOPI</h3>
			
		</div>

		<div class="panel-body">
			<a href="<?php echo base_url();?>administrator/Coffee/tambah"><button class="btn btn-success col-md-offset-11">Tambah Kopi</button></a>
			<br>
			<br>

			<table class="table table-bordered" id="dtab">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kopi</th>
						<!-- <th>Acidity</th>
						<th>Sweetness</th>
						<th>Bitterness</th> 
						<th>Savory</th> -->
						<th>Origin</th>
						<th>Roast profile</th>
						<th>Tipe</th>
						<th>Proses</th>
						<th>Roaster</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach ($kopi as $key => $value): ?>
						<tr>
							<!-- <td><?php echo $value['id_kopi'] ?></td> -->
							<td><?php echo $no++; ?></td>
							<td><?php echo $value['nama_kopi'] ?></td>
							<!-- <td><?php echo $value['acidity'] ?></td>
							<td><?php echo $value['sweet'] ?></td>
							<td><?php echo $value['bitter'] ?></td>
							<td><?php echo $value['savory'] ?></td> -->
							<td><?php echo $value['origin'] ?></td>
							<td><?php echo $value->profil->nama_roast_prof; ?></td>
							<td><?php echo $value->jenis->jenis_kopi; ?></td>
							<td><?php echo $value->proses->nama_proses;?></td>
							<!-- <td><img src="../assets/img/coffee/<?php echo $value['foto_1'] ?>" class="img-circle" height="100" width="100"></td>
							<td><img src="../assets/img/coffee/<?php echo $value['foto_2'] ?>" class="img-circle" height="100" width="100"></td>
							<td><img src="../assets/img/coffee/<?php echo $value['foto_3'] ?>" class="img-circle" height="100" width="100"></td> -->
							<td><?php echo $value->roaster->nama_roaster ?></td>
							<td>
								<!-- <a href="" class="btn btn-info btn-sm"> Detail</a> -->
								<a href="<?php echo base_url('administrator/Coffee/detail/'.$value['id_kopi']);?>" class="btn btn-info btn-sm"> Detail</a>
								<a href="<?php echo base_url('administrator/Coffee/edit/'.$value['id_kopi']);?>" class="btn btn-warning btn-sm"> Ubah</a>
								<a class="btn btn-danger btn-sm" onClick="hapus()"> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>

				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	function hapus() {
		
		var r = confirm("Are you sure you want to delete this item?");
		if (r == true) 
		{	
			window.location = "<?php echo base_url('administrator/Coffee/hapus/'.$value['id_kopi']);?>"					
		}
	}
</script> 