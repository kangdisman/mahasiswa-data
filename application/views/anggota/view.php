<table style="width: 100%">
	<tr>
		<td style="width: 130px;">Nama</td><td>:</td><td style="width: 200px;"><strong><?php echo $anggota['nama']; ?></strong></td>
		<td rowspan="7"><img src="<?php echo base_url('./images/'.$anggota['foto']); ?>" width="200px" height="200px"></td>
	</tr>
	<tr>
		<td>Alamat</td><td>:</td><td><strong><?php echo $anggota['alamat']; ?></strong></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td><td>:</td><td><strong><?php echo $anggota['jk']; ?></strong></td>
	</tr>
	<tr>
		<td>Kampus</td><td>:</td><td><strong><?php echo $anggota['kampus']; ?></strong></td>
	</tr>
	<tr>
		<td>Prodi</td><td>:</td><td><strong><?php echo $anggota['prodi']; ?></strong></td>
	</tr>
	<tr>
		<td>Tahun</td><td>:</td><td><strong><?php echo $anggota['tahun']; ?></strong></td>
	</tr>
</table><br>
<a href="<?php echo base_url('index.php/anggota/get_all'); ?>"><b>Kembali</b></a>