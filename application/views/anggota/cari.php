<?php if (empty()) {
	echo $message;
} else { ?>

<table class="table table-hover table-btn-hover">
	<thead>
		<tr>
			<th style="width: 30px;">No</th>
			<th style="width: 30px;"><input type="checkbox"></th>
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
			<td><input type="checkbox"></td>
			<td><p><?php echo $row->nama; ?></p>
			<p>
				<a href="<?php echo base_url('index.php/anggota/edit/'.$row->id); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default btn-mini"><i class="icon-pencil"></i></a>
				<a href="<?php echo base_url('index.php/anggota/view/'.$row->id); ?>" data-toggle="tooltip" title="Tinjau" class="btn btn-default btn-mini"><i class="icon-share-alt icon-blue"></i></a>
				<a href="<?php echo base_url('index.php/anggota/hapus/'.$row->id); ?>" onclick="return confirm('Are you sure?')" data-toggle="tooltip" title="Hapus" class="btn btn-default btn-mini"><i class="icon-trash icon-red"></i></a>
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

<?php } ?>