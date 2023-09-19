<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi_db, "select *from adm where admnme = '$user' and 
         admpw = '$pass'");
$cek = mysqli_num_rows($query);
if($cek>0){
    echo '<script>
        alert("Login Account Succes!");
        location.href = "../WebKlinik/pelanggan.php";
    </script>';
} else{
    echo '<script>
    location.href = "login.php";
    </script>';
}
?>
