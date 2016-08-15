<?php echo form_open_multipart('anggota/update', 'class="form-horizontal"'); ?>
	<input type="hidden" name="id" value="<?php echo $anggota['id']; ?>">
	<fieldset>
		<?php echo validation_errors(); ?>
		<div class="control-group">
			<label class="control-label">Nama Lengkap</label>
			<div class="controls">
				<input class="span4" type="text" name="nama" value="<?php echo $anggota['nama']; ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Alamat</label>
			<div class="controls">
				<input type="text" name="alamat" class="span6" value="<?php echo $anggota['alamat']; ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Jenis Kelamin</label>
			<div class="controls">
				<label class="radio">
					<input type="radio" name="jk" value="Pria" checked="">
					<span class="lbl">Pria</span>
				</label>
				<div style="clear:both"></div>
				<label class="radio">
					<input type="radio" name="jk" value="Wanita">
					<span class="lbl">Wanita</span>
				</label>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Kampus</label>
			<div class="controls">
				<input type="text" name="kampus" class="span2" value="<?php echo $anggota['kampus']; ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Prodi</label>
			<div class="controls">
				<input type="text" class="span4" name="prodi" value="<?php echo $anggota['prodi']; ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Tahun</label>
			<div class="controls">
				<input type="text" name="tahun" class="span2" value="<?php echo $anggota['tahun']; ?>">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Foto</label>
			<div class="controls">
				<div class="form-group">
					<div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;"><img src="<?php echo base_url('images/'.$anggota['foto']); ?>" style="width: 100px; height: 100px;"></div>
					  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 200px;"></div>
					  
					  <div>
						<span class="btn btn-success btn-file">
							<span class="fileinput-new"><i class="icon-folder-open icon-white"></i> Pilih Gambar</span>
							<span class="fileinput-exists"><i class="icon-refresh"></i>Ganti</span>
							<input type="file" name="foto" value="<?php echo $anggota['foto']; ?>">
						</span>
						<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="icon-trash icon-white"></i>Hapus</a>
					  </div>
					
					</div>
				</div>	
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success">Update</button>
			<button type="reset" class="btn" onclick="self.history.back()">Cancel</button>
		</div>
	</fieldset>
</form>