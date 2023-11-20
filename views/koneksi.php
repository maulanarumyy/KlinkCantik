<?php
    $koneksi_db = mysqli_connect("localhost","root", "" , "projectapotek");

    // check connection
    if(mysqli_connect_error()){
        echo "Koneksi database gagal : " . 
            mysqli_connect_error();
    }
?>