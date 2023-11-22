
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
        <h2 class="alert alert-dark text-center mt-3">INPUT OBAT</h2>

        <form action="../controller/cekobat.php" method="post">
            <div class="form-group">
                <label>ID Obat</label>
                <input type="text" name="id" class="form-control" placeholder="Masukan ID Obat">
            </div>

             <div class="form-group">
                <label>Nama Obat</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Obat">
            </div>

            <div class="form-group">
                <label>Stock Obat</label>
                <input type="text" name="stock" class="form-control" placeholder="Masukan Stock">
            </div>
             
            <div class="form-group">
                <label>Kadaluarsa Obat</label>
                <input type="date" name="tahun" class="form-control" placeholder="Masukan Tanggal">
            </div>

            <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="obat.php" class="btn btn-dark">Cancel</a>
            </div>
   
         </form>
    </div>
</body>
<script scr="Bootstrap/js/bootstrap.min.js"></script>
</html>