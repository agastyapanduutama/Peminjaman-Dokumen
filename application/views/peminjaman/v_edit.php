<section class="content-header">
      <h1>Update
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Update Data</li>
      </ol>
</section>

<!-- Main contens -->
<section class="content">
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Update Data</h3>
			<div class="pull-right">
				<a href="<?=site_url('user')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>
			</div>
		</div>
		<div class="box-body">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<?php //echo validation_errors(); ?>
					<!-- MENGAMBIL DATA ID PEMINJAMAN - SIMPAN KE CONTROLLER PEMINJAMAN FUNCTION SIMPAN EDIT -->
					<form action="<?= base_url('peminjaman/simpan_edit/'.$data->id_peminjaman)?>" method="POST">
						
						<input type="" hidden="" value="<?= $data->id_peminjaman?>" name="id_peminjaman">

						<div class="form-group">
							<label>NO RM *</label>
							<input type="text" name="no_rm" value="<?= $data->no_rm?>" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Name *</label>
							<input type="text" name="nama" value="<?= $data->nama?>" class="form-control">
						</div>
						
						<div class="form-group">
							<label>No_hp *</label>
							<input type="text" name="no_hp" value="<?= $data->no_hp?>" class="form-control">
						</div>

						<div class="form-group">
							<label>Unit kerja *</label>
							<input type="text" name="unit_kerja" value="<?= $data->unit_kerja?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Tanggal Peminjaman *</label>
							<input type="date" name="tgl_peminjaman" value="<?= $data->tgl_peminjaman?>" class="form-control">
						</div>

						<div class="form-group">
							<label>peminjam *</label>
							<input type="text" name="peminjam" value="<?= $data->peminjam?>" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Username *</label>
							<input type="text" name="username" value="<?=ucfirst($this->fungsi->user_login()->name)?>" readonly class="form-control">
						</div>
												
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