<?php
include "koneksi.php";

$id = $_POST['id'];
$nama    = $_POST['nama'];
$umur    = $_POST['umur'];
$notlp    = $_POST['notlp'];
$pekerjaan    = $_POST['pekerjaan'];
$alamat    = $_POST['alamat'];
$jkelamin    = $_POST['jKelamin'];

$query = mysqli_query($koneksi_db, 'insert into acustomer(id_customer,nama_customer,umur,noTlp,pekerjaan, alamat, jenis_kelamin) values 
                    ("'.$id.'","'.$nama.'","'.$umur.'","'.$notlp.'","'.$pekerjaan.'","'.$alamat.'","'.$jkelamin.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='pelanggan.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='inputpelanggan.php'</script>\n";
}
?>