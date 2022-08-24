<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Laporan Penjualan</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                        <!-- <a href="<?= base_url("po/tambah"); ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a> -->
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Customer</th>
									<th>Total Barang</th>
									<th>Jumlah Pembelian</th>
									<th>Tanggal</th>
									
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->nama_customer; ?></td>
									<td><?= $po->total_barang; ?></td>
									<td><?= $po->jumlah_pembelian; ?></td>
									<td><?= $po->tanggal_transaksi; ?></td>
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

