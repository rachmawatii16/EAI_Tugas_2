<?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $databasename = "eai_api";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("koneksi gagal");
    }

?>