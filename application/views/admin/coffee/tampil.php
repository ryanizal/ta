<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="">Home</a></li>
		<li class="active"><a href="">Coffee</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>DATA COFFEE</h3>
			
		</div>

		<div class="panel-body">
			<a href="<?php echo base_url();?>administrator/Coffee/tambah"><button class="btn btn-success col-md-offset-11">Tambah Kopi</button></a>
			<br>
			<br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id Kopi</th>
						<th>Nama Kopi</th>
						<th>Acidity</th>
						<th>Sweetness</th>
						<th>Bitterness</th>
						<th>Savory</th>
						<th>Foto 1</th>
						<th>Foto 2</th>
						<th>Foto 3</th>
						<th>Roasterd by</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($kopi as $key => $value): ?>
						<tr>
							<td><?php echo $value['id_kopi'] ?></td>
							<td><?php echo $value['nama_kopi'] ?></td>
							<td><?php echo $value['acidity'] ?></td>
							<td><?php echo $value['sweet'] ?></td>
							<td><?php echo $value['bitter'] ?></td>
							<td><?php echo $value['savory'] ?></td>
							<td><img src="../assets/img/coffee/<?php echo $value['foto_1'] ?>" class="img-circle" height="100" width="100"></td>
							<td><img src="../assets/img/coffee/<?php echo $value['foto_2'] ?>" class="img-circle" height="100" width="100"></td>
							<td><img src="../assets/img/coffee/<?php echo $value['foto_3'] ?>" class="img-circle" height="100" width="100"></td>
							<td><?php echo $value['id_roaster'] ?></td>
							<td>
								<!-- <a href="" class="btn btn-info btn-sm"> Detail</a> -->
								<a href="<?php echo base_url('administrator/Coffee/edit/'.$value['id_kopi']);?>" class="btn btn-warning btn-sm"> Ubah</a>
								<a href="<?php echo base_url('administrator/Coffee/hapus/'.$value['id_kopi']);?>" class="btn btn-danger btn-sm"> Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>

				</tbody>
			</table>
		</div>
	</div>
</div>