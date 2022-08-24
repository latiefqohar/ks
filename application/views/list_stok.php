<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Pembelian</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                    <?php if($this->session->userdata("role")!="Kasir"){ ?>
                        <button data-toggle="modal" data-target="#modalTambah" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Stok Produk</button>
                        <?php } ?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Stok</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($data_barang as $barang){ ?>
								<tr>
									<td><?= $barang->id; ?></td>
									<td><?= $barang->nama_barang; ?></td>
									<td><?= $barang->qty; ?></td>
									<td><?= $barang->harga; ?></td>
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

<!-- modal tambah-->
<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Stok Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("stok/add_action"); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select name="id_barang" class="form-control" required>
                            <option value="">Pilih Produk</option>
                            <?php foreach($data_barang as $barang){?>
                                <option value="<?= $barang->id; ?>"><?= $barang->nama_barang; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="number" class="form-control" name="qty" id="qty" 
                            placeholder="Jumlah Barang" required>
                    </div>
                   
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>