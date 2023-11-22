<?php
    require "../config/database.php";

    $koneksi_db = new mysqli(
        $config["server"], 
        $config["username"], 
        $config["password"], 
        $config["database"]
    );
?>