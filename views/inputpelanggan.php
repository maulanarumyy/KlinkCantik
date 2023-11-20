<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>KLINIK CANTIK</title>
    </head>
    <body>

     <div class="container">
        <h2 class="alert alert-dark text-center mt-3">PENDAFTARAN PELANGGAN</h2>
        
        <form method="post" action="cekaccount.php" >
            <div class="form-group">
                <label>ID Pelanggan</label>
                <input type="text" name="id" class="form-control" placeholder="Masukan ID">
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control" placeholder="Masukan Umur">
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="notlp" class="form-control" placeholder="Masukan No Telepon">
            </div>

            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukan Pekerjaan">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jKelamin" class="form-control" placeholder="Masukan Jenis Kelamin">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
                <a href="transaksi.php" class="btn btn-dark">Cancel</a>
            </div>
        </form>
    </body>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</html>