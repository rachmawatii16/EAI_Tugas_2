<?php
    include "conn.php";

    $nama_pegawai = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $gaji_pegawai = isset($_POST["gaji"]) ? $_POST["gaji"] : "";
    $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";

    $sql = "INSERT INTO pegawai (nama_pegawai, gaji_pegawai, alamat) VALUES ('$nama_pegawai', '$gaji_pegawai', '$alamat')";

    $query = mysqli_query($conn, $sql);
    if($query){
        $message = "berhasil";
    }else{
        $message = "gagal";
    }

    $response = array(
        'status' => 'OK',
        'message' => $message
    );

    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);

?>