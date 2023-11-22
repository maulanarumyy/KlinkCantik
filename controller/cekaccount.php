<?php
include "koneksi.php";

session_start();

$id = filter_var(hash('sha256', $_POST['id']), FILTER_SANITIZE_STRING);
$nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
$umur = filter_var($_POST['umur'], FILTER_SANITIZE_STRING);
if (!preg_match("/^[0-9]{10,12}$/", $notlp)) {
    echo "<script>alert('Masukkan angka'); document.location.href='inputpelanggan.php'</script>\n";
    exit;
}
$notlp = filter_var($_POST['notlp'], FILTER_SANITIZE_STRING);
if (!preg_match("/^[0-9]{10,12}$/", $notlp)) {
    echo "<script>alert('Masukkan angka'); document.location.href='inputpelanggan.php'</script>\n";
    exit;
}
$pekerjaan = filter_var($_POST['pekerjaan'], FILTER_SANITIZE_STRING);
$alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);
$jkelamin = filter_var($_POST['jKelamin'], FILTER_SANITIZE_STRING);

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($koneksi_db, 'INSERT INTO acustomer (id_customer, nama_customer, umur, noTlp, pekerjaan, alamat, jenis_kelamin) VALUES (?, ?, ?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($stmt, 'sssssss', $id, $nama, $umur, $notlp, $pekerjaan, $alamat, $jkelamin);

// Execute the prepared statement
$query = mysqli_stmt_execute($stmt);

if ($query) {
    echo "<script>alert('Data Berhasil Disimpan'); document.location.href='../views/pelanggan.php'</script>\n";
} else {
    echo "<script>alert('Data Gagal Disimpan'); document.location.href='inputpelanggan.php'</script>\n";
}

// Close the statement
mysqli_stmt_close($stmt);
?>
