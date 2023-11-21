<?php
    include 'koneksi.php';
    $query = mysqli_query($koneksi_db, "SELECT max(id_transaksi) as maxKode FROM apenjualan");
    $data = mysqli_fetch_array($query);
    $kodepinjam = $data['maxKode'];
    $noUrut = (int) substr($kodepinjam, 3, 3);
    $noUrut++;
    $char = 'ODR';
    $kode = $char . sprintf("%03s", $noUrut);
    ?>    
<!DOCTYPE html>
<html>
<head>
    <title>KLINIK CANTIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/input.css" media="all">
    <script> 
        function pengurangan()
        {

            var peng1,peng2,hasil;

            peng1 = input(peng1);
            peng2 = input(peng2);

            hasil = ppengurangan(peng1,peng2);

            Tapilan(hasil);
        }

        function ppengurangan(bilpeng1, bilpeng2)
        {
            var hasil1;
            hasil = bilpeng1 - bilpeng2;
            return hasil1;
        }
    </script>
</head>
<body>
    <?php
    include 'koneksi.php';
    $nmcustomer ="";
    $idcustomer = "";
    $tgltransaksi ="";
    $ttltransaksi ="";
    $ttlbayar ="";
    $ttlkembalian = "";

    if(isset($_POST['Cari']))
    {
        $nmcustomer = $_POST['nama_customer'];

        $query = "SELECT * from acustomer WHERE nama_customer = '$nmcustomer'";
        $hasil = mysqli_query($koneksi_db, $query);
        $data = mysqli_fetch_array($hasil);

        if($hasil){
            $idcustomer = $data['id_customer'];
        }else{
            echo "Data Tidak Tersedia";
        }
    }
    
    if(isset($_POST['submit']))
    {
        $kdpinjam = $_POST['kode'];
        $nmcustomer = $_POST['nama_customer'];
        $idcustomer = $_POST['id_customer'];
        $tgltransaksi = $_POST['tanggal_transaksi'];
        $total_transaksi = $_POST['total_transaksi'];
        $total_bayar = $_POST['total_bayar'];
        $total_kembalian = $_POST['total_kembalian'];
            

        $add = mysqli_query($koneksi_db, "INSERT INTO apenjualan (id_transaksi, id_customer, tanggal_transaksi, total_transaksi, total_bayar, total_kembalian) 
        VALUES ('$kdpinjam', '$idcustomer', '$tgltransaksi', '$total_transaksi', '$total_transaksi','$total_bayar', '$total_kembalian')");

        if($add)
        {
            echo "<script>alert('data berhasil disimpan');
            document.location.href='pembelian.php'</script>\n";"";
        } else 
        {
            echo 'Data Gagal Disimpan <br> <a href="inputpembelian.php">Kembali</a>';
        }
    }
    ?>
            <div class="container">
                <form action="inputtransaksi.php" method="post">
                <h2 class="alert alert-dark text-center mt-3"> PEMBELIAN OBAT </h2>
                <div class="form-group">
                    <label for="kode" class="text-dark">Kode Transaksi</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $kode ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="sel1">Nama Customer</label><br>
                    <input type="text" name="nama_customer" value="<?php echo $nmcustomer?>">
                    <input type="submit" name="Cari" value="SEARCH"><br>

                    <label>ID Customer</label>
                    <input class="form-control" type="text" name="id_customer" value="<?php echo $idcustomer ?>" readonly>     
                </div>
                <div class="form-group">
                    <label for="tanggal_transaksi" class="text-dark">Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tanggal_transaksi" >
                </div>
                <div class="form-group">
                    <label>Total Transaksi</label>
                    <input type="text" id="peng1" name="total_transaksi" class="form-control" placeholder="Masukan Total Transaksi">
                </div>
                <div class="form-group">
                    <label>Total Bayar</label>
                    <input type="text" id="peng2" name="total_bayar" class="form-control" placeholder="Masukan Total Bayar"> <br>
                    <input type="submit" name="pengurangan" value="TOTAL" onclick="pengurangan()"><br>

                </div>
                <div class="form-group">
                    <label>Total Kembalian</label>
                    <input type="text" id="output" name="total_kembalian" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="transaksi.php" class="btn btn-dark">Cancel</a>
                </div>
                </form>
            </div>
            <script>
                function Input(idElement)
                {
                    var input;
                    input = parseFloat(document.getElementById(idElement).value);
                    return input;
                }
                function Tapilan(hass)
                {
                    document.getElementById("output").innerHTML=hass;
                }
            </script>
</body>