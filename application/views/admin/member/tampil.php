<div id="page-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('administrator/Home'); ?>">Home</a></li>
		<li class="active"><a href="<?php echo base_url('administrator/Member'); ?>">Member</a></li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>DATA MEMBER</h3>
			
		</div>

		<div class="panel-body">
			<!-- <a href="<?php echo base_url();?>administrator/member/tambah"><button class="btn btn-success col-md-offset-11">Tambah Member</button></a> -->
			<br>
			<br>

			<table class="table table-bordered" id="dtab">
				<thead>
					<tr>
						<th width="3%" class="text-center">No</th>
						<th>Username</th>
						<!-- <th>Password</th> -->
						<th>Nama Member</th>
				<!-- <th>Bio</th>
					<th>Foto Member</th> -->
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($member as $key => $value): ?>
					<tr>
						<td class="text-center"><?php echo $no++?></td>
						<td><?php echo $value['username_member'] ?></td>
						<!-- 		<td><?php echo $value['password_member'] ?></td> -->
						<td><?php echo $value['nama_member'] ?></td>
				<!-- <td><?php echo $value['keterangan_member'] ?></td>
					<td><img src="../assets/img/member/<?php echo $value['foto_member'] ?>" class="img-circle" height="100" width="100"></td> -->
					<td>
						<!-- <a href="<?php echo base_url('administrator/member/edit/'.$value['id_member']);?>" class="btn btn-warning btn-sm"> Ubah</a> -->
						<a class="btn btn-danger btn-sm" onClick="hapus()" > Hapus</a>
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
			window.location = "<?php echo base_url('administrator/member/hapus/'.$value['id_member']);?>"					
		}
	}
</script>  