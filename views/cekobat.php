<?php
include "koneksi.php";

$id        = $_POST['id'];
$nama       = $_POST['nama'];
$stock         = $_POST['stock'];
$tahun        = $_POST['tahun'];



$query = mysqli_query($koneksi_db,'insert into aobat(id_obat,nama_obat,stock,tanggal_kdlswr) values 
                        ("'.$id.'","'.$nama.'","'.$stock.'","'.$tahun.'")');
if ($query) {
echo "<script>alert('Data Berhasil Disimpan');
document.location.href='obat.php'</script>\n";
} else {
echo "<script>alert('Data Gagal Disimpan');
document.location.href='inputobat.php'</script>\n";
}
?>