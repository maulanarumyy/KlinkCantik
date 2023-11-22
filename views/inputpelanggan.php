
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <title>KLINIK CANTIK</title>
    </head>
    <body>

     <div class="container">
        <h2 class="alert alert-dark text-center mt-3">PENDAFTARAN PELANGGAN</h2>
        
        <form method="post" action="../controller/cekaccount.php" onsubmit="hashPassword()">
            <div class="form-group">
                <label>ID Pelanggan</label>
                <input type="text" name="id" id="id" class="form-control" placeholder="Masukan ID" require>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" require>
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="umur" class="form-control" placeholder="Masukan Umur" require>
            </div>

            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="notlp" pattern="[0-9]{10,12}" class="form-control" placeholder="Masukan No Telepon" require>
            </div>

            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukan Pekerjaan" require>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" require>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jKelamin" class="form-control" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="PR">PR</option>
                    <option value="LK">LK</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
                <a href="transaksi.php" class="btn btn-dark">Cancel</a>
            </div>
        </form>
    </body>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script>
    function hashPassword(){
        var idInput = document.getElementById("id");
        idInput.value = CryptoJS.SHA256(idInput.value);
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
</html>