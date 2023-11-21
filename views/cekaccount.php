<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$notlp = $_POST['notlp'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$jkelamin = $_POST['jKelamin'];

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($koneksi_db, 'INSERT INTO acustomer (id_customer, nama_customer, umur, noTlp, pekerjaan, alamat, jenis_kelamin) VALUES (?, ?, ?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($stmt, 'sssssss', $id, $nama, $umur, $notlp, $pekerjaan, $alamat, $jkelamin);

// Execute the prepared statement
$query = mysqli_stmt_execute($stmt);

if ($query) {
    echo "<script>alert('Data Berhasil Disimpan'); document.location.href='pelanggan.php'</script>\n";
} else {
    echo "<script>alert('Data Gagal Disimpan'); document.location.href='inputpelanggan.php'</script>\n";
}

// Close the statement
mysqli_stmt_close($stmt);
?>