<?php 

function rupiah($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}

?>

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
                        <div class="row mb-5">
							<div class="col-lg-12">
							<form action="" method="POST">
								<div class="form-group">
									<label for="nama">Produk</label>
									<select name="id_barang" class="form-control" required>
										<option value="">Pilih Produk</option>
										<?php foreach($barang as $brg){ ?>
											<option value="<?= $brg->id; ?>"><?= $brg->nama_barang; ?> - <?= $brg->harga; ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="nama">Total</label>
									<input type="number" name="total" class="form-control" required>
								</div>
								<button type="submit" class="btn btn-primary float-right">Masukkan Produk</button>
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
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
                                <?php 
								$total_pembelian=0;
								foreach($data_po as $po){ ?>
								<tr>
									<td><?= $po->id; ?></td>
									<td><?= $po->nama_barang; ?></td>
									<td><?= $po->total; ?></td>
									<td><?= rupiah($po->harga); ?></td>
									<td><?= rupiah($po->total*$po->harga); ?></td>
									<td>
                                        <a href="<?= base_url("po/delete_temp/".$po->id); ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                    </td>
								</tr>
                                <?php 
								$pembelian = $po->total*$po->harga;
								$total_pembelian+= $pembelian;
							} ?>
							</tbody>
						</table>
						<h2>Total Belanja : <?= $total_pembelian; ?></h2>

						<form action="<?= base_url("po/simpan_po"); ?>" method="POST" >
							<div class="form-group mt-5">
								<label for="nama">Customer</label>
								<input type="text" name="nama_customer" class="form-control" required>
								<input type="hidden" name="jumlah_pembelian" class="form-control" value="<?= $total_pembelian; ?>">
							</div>
							<button type="submit" class="btn btn-success float-right">Proses Transaksi</button>
						</form>
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

