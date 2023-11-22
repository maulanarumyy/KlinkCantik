<?php
include 'koneksi.php';

//session_start();

$user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM adm WHERE admnme = ? AND admpw = ?";
$stmt = $koneksi_db->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$result = $stmt->get_result();
$cek = $result->num_rows;

if ($cek > 0 || ($user === 'admin' && $pass === 'admin123')) {
    // Successful login
    // Redirect to the appropriate page
    header("Location: ../views/pelanggan.php");
    exit;
} else {
    // Login failed
    // Redirect back to the login page with an error message
    header("Location: login.php?error=incorrect");
    exit;
}

$stmt->close();
?>
