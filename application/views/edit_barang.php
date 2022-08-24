<!-- Main content -->
<section class="content mt-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Ubah Produk</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
                       
                    <form action="<?= base_url("barang/update"); ?>" method="POST">
                      
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama" 
                                placeholder="Nama Barang" value="<?= $barang['nama_barang']; ?>" required>
                            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" 
                                placeholder="Jumlah Barang" value="<?= $barang['qty']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="Harga" 
                                placeholder="Harga Barang" value="<?= $barang['harga']; ?>" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
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
