<section class="content-header">
	<h1>Tambah
		<small>Data</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Tambah Data</li>
	</ol>
</section>

<!-- Main contens -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Tambah Data</h3>
			<div class="pull-right">
				<a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<?php //echo validation_errors(); 
					?>
					<!-- MELAKUKAN PENYIMPANAN -->
					<form action="<?= base_url('peminjaman/simpan') ?>" method="POST">

						<div class="form-group">
							<label>No Rm *</label>
							<input type="text" name="no_rm" class="form-control">

						</div>

						<div class="form-group">
							<label>Name *</label>
							<input type="text" name="nama" class="form-control">

						</div>

						<div class="form-group">
							<label>No hp *</label>
							<input type="text" name="no_hp" class="form-control">

						</div>

						<div class="form-group">
							<label>Unit Kerja *</label>
							<select name="unit_kerja" class="form-control" id="">
								<option value="1">Paviliun</option>
								<option value="2">Reguler</option>
							</select>
						</div>

						<div class="form-group">
							<label>Tanggal Peminjaman *</label>
							<input type="date" name="tgl_peminjaman" class="form-control">

						</div>

						<div class="form-group">
							<label>Peminjam *</label>
							<select name="peminjam" class="form-control" id="" require>
								<option value="0">-- Silakan Pilih -- </option>
								<option value="1">Dokter</option>
								<option value="2">Pegawai</option>
								<option value="3">Perawat</option>
							</select>
						</div>

						<div>
							<label for=""> Nama Peminjam </label>
							<input type="text" class="form-control" name="peminjam_nama">
						</div>

						<input type="hidden" name="id_user" value="<?= $this->session->userdata('userid') ?>" class="form-control">

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-flat">
								<i class="fa fa-paper-plane"></i> Save
							</button>
							<button type="Reset" class="btn btn-flat">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>