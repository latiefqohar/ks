<!-- Main content -->
<section class="content mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <center>
                            <h3>
                                Selamat Datang
                            </h3>

                            <h4>Sistem Informasi Pencatatan penjualan Koperasi</h4>
                            <h6>SMP Islam Terpadu Darussalam</h6>
                        </center>

                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                   
                </div>
            </div>
           
        </div>
        <!-- /.row -->


        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Data Penjualan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->