<?php
include 'koneksi.php';

$user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM adm WHERE admnme = ? AND admpw = ?";
$stmt = $koneksi_db->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$result = $stmt->get_result();
$cek = $result->num_rows;

if ($cek > 0) {
    echo '<script>
        alert("Login Account Successful!");
        location.href = "../views/pelanggan.php";
    </script>';
} else {
    echo '<script>
        location.href = "login.php";
    </script>';
}

$stmt->close();
