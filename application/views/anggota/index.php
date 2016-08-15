<a href="#" class="btn btn-success" type="button"><i class="icon-plus-sign icon-white"></i> Tambah</a>
	<form class="pull-right" method="POST" action="cari">
		<div class="input-append">
			<input type="text" name="search" placeholder="Searching...">
			<button class="btn" type="button"><i class="icon-search"></i></button>
		</div>
	</form>
<table class="table table-hover table-btn-hover">
	<thead>
		<tr>
			<th style="width: 30px;">No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Kampus</th>
			<th>Prodi</th>
			<th>Tahun</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		$no = 1;
		foreach ($anggota as $key => $row) : 
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><img src="<?php echo base_url('./images/'.$row->foto); ?>" width="45px" height="50px"></td>
			<td><p><?php echo $row->nama; ?></p>
			<p>
				<a href="#" data-toggle="tooltip" title="Edit" class="btn btn-default btn-mini"><i class="icon-pencil"></i></a>
				<a href="<?php echo base_url('index.php/anggota/view/'.$row->id); ?>" data-toggle="tooltip" title="Tinjau" class="btn btn-default btn-mini"><i class="icon-share-alt icon-blue"></i></a>
				<a href="#" data-toggle="tooltip" title="Hapus" class="btn btn-default btn-mini"><i class="icon-trash icon-red"></i></a>
			</p>
			</td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->jk; ?></td>
			<td><?php echo $row->kampus; ?></td>
			<td><?php echo $row->prodi; ?></td>
			<td><?php echo $row->tahun; ?></td>
		</tr>
	<?php 
	$no++;
	endforeach; 
	?>
	</tbody>
</table>
<strong>Halaman : <?php echo $pagination; ?></strong>