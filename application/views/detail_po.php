<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Detail Penjualan</h3>
						<a href="<?= base_url("po/print/".$header['id']); ?>" class="btn btn-primary ml-3 float-right"><i class="fas fa-print"></i> Cetak</a>
						
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						
                        <div class="row mb-5">
							<div class="col-lg-12">
							<form action="" method="POST">
								<div class="form-group">
									<label for="nama">Customer</label>
									<input type="text" class="form-control" value="<?= $header['nama_customer']; ?>" readonly>
								</div>
							</form>

							</div>
						</div>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Barang</th>
									<th>Total Barang</th>
									<th>Harga</th>
									<th>Total Harga</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->nama_barang; ?></td>
									<td><?= $po->total; ?></td>
									<td><?= $po->harga; ?></td>
									<td><?= $po->harga* $po->total; ?></td>
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

