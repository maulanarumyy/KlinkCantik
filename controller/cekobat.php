<?php
include "koneksi.php";

session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$stock = $_POST['stock'];
$tahun = $_POST['tahun'];

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($koneksi_db, 'INSERT INTO aobat (id_obat, nama_obat, stock, tanggal_kdlswr) VALUES (?, ?, ?, ?)');
mysqli_stmt_bind_param($stmt, 'ssss', $id, $nama, $stock, $tahun);

// Execute the prepared statement
$query = mysqli_stmt_execute($stmt);

if ($query) {
    echo "<script>alert('Data Berhasil Disimpan'); document.location.href='../views/obat.php'</script>\n";
} else {
    echo "<script>alert('Data Gagal Disimpan'); document.location.href='inputobat.php'</script>\n";
}

// Close the statement
mysqli_stmt_close($stmt);
?>
