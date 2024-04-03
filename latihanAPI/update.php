<?php
    include "conn.php";

    $id = $_GET['id'];

    $nama_pegawai = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $gaji_pegawai = isset($_POST["gaji"]) ? $_POST["gaji"] : "";

    $sql = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', alamat = '$alamat', gaji_pegawai = '$gaji_pegawai' WHERE id_pegawai = $id";

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