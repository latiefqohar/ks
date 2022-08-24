<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Transaksi Penjualan</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <a href="<?= base_url("po/tambah"); ?>" class="btn btn-primary mb-2"><i class="fas fa-fax"></i> Penjualan</a>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Customer</th>
									<th>Total</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->nama_customer; ?></td>
									<td><?= $po->jumlah_pembelian; ?></td>
									<td><?= $po->tanggal_transaksi; ?></td>
									
									<td>
                                        <a href="<?= base_url("po/detail/".$po->id); ?>" title="Detail" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                        <a href="<?= base_url("po/print/".$po->id); ?>" title="Cetak" class="btn btn-primary"><i class="fas fa-print"></i></a>
                                        <a href="<?= base_url("po/delete/".$po->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" title="Delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </td>
								</tr>
                                <?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->

