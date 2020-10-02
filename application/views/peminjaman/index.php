<section class="content-header">
      <h1>Peminjaman
        <small>Data Peminjaman</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
</section>

<!-- Main contens -->
<section class="content">
	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data Peminjaman</h3>
			<div class="pull-right">
				<a href="<?=site_url('peminjaman/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Create
				</a>
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>No. RM</th>
						<th>Nama</th>
						<th>No_Hp</th>
						<th>Unit_Kerja</th>
						<th>Tanggal Pinjam</th>
						<th>peminjam</th>
						<th>Nama Peminjam</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach($row->result() as $key =>$data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->no_rm?></td>
						<td><?=$data->nama?></td>
						<td><?=$data->no_hp?></td>
						<td><?=$data->unit_kerja ?></td>
						<td><?=$data->tgl_peminjaman?></td>
						<td><?=$data->peminjam?></td>
						<td><?=$data->peminjam_nama?></td>
						<!-- <td><?=$data->name?></td> -->
						<td class="text-center" width="160px">
								<a href="<?=site_url('peminjaman/edit/'.$data->id_peminjaman)?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Update</a>
								<a href="<?= base_url('peminjaman/hapus/'.$data->id_peminjaman)?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"> Hapus</i></a>
						</td>
					</tr>
					<?php 
					} ?>
				</tbody>
			</table>
		</div>
	</div>

</section>