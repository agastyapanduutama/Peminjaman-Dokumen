<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets//bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<section class="content-header">
	<h1>Pengembalian
		<small>Data Pengembalian</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Users</li>
	</ol>

	<hr>

	masukan NO RM :
	<form action="<?= base_url('Pengembalian') ?>" action="GET">
		<input type="text" name="no_rm">
		<button type="submit">Cari</button>
	</form>

</section>



<!-- Main contens -->
<section class="content">



	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Pengembalian</h3>
		</div>
		<div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>No. RM</th>
						<th>Nama</th>
						<th>No_Hp</th>
						<th>Unit_Kerja</th>
						<th>Tanggal Pinjam</th>
						<th>tanggal kembali</th>
						<th>peminjam</th>
						<th>Nama Peminjam</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) { ?>
						<tr>
							<td><?= $no++ ?>.</td>
							<td><?= $data->no_rm ?></td>
							<td><?= $data->nama ?></td>
							<td><?= $data->no_hp ?></td>
							<td><?= $data->unit_kerja ?></td>
							<td><?= $data->tgl_peminjaman ?></td>
							<td>
								<?php if ($data->tanggal_kembali != "0000-00-00")  {?>
									<?= $data->tanggal_kembali ?>
								<? } ?>
							</td>
							<td><?= $data->peminjam ?></td>
							<td><?= $data->peminjam_nama ?></td>
							<td class="text-center" width="160px">
								
								<?php if ($data->tanggal_kembali == "0000-00-00")  {?>
									<a href="<?= site_url('pengembalian/kembali/' . $data->id_peminjaman) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Kembalian</a>
								<? } ?>
								
								<!-- <a href="<?= base_url('peminjaman/hapus/' . $data->id_peminjaman) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"> Hapus</i></a> -->
							</td>
						</tr>
					<?php
					} ?>
				</tbody>
			</table>
		</div>
	</div>

</section>


<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->

<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>


<script>
	$(function() {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})
</script>