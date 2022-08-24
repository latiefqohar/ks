<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Print Bukti Penjualan</title>
</head>

<body>
    <center>
        <h2>Bukti Penjualan</h2>
    </center>

    <br>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <td><?= $header['tanggal_transaksi']; ?></td>
        </tr>
    </table>
    <br>
    <h4>Detail Pembelian Produk</h4>
    <table  class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Total Produk</th>
                <th>Total harga</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $pembelian = 0;
            foreach($data_po as $po){ ?>
            <tr>
                <td><?= $po->id; ?></td>
                <td><?= $po->nama_barang; ?></td>
                <td><?= $po->total; ?></td>
                <td><?= $po->harga* $po->total; ?></td>
            </tr>
            <?php 
            $total_harga =$po->harga* $po->total;
            $pembelian +=$total_harga;
        } ?>

            <tr>
                <th colspan="3" style="text-align:right;">Total</th>
                <th  style="text-align:left;text-size:14"><?= $pembelian; ?></th>
            </tr>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>window.print();
    </script>
</body>

</html>