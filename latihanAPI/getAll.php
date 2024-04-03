<?php
    include "conn.php";

    $sql = "SELECT * FROM pegawai";
    $query = mysqli_query($conn, $sql);
    $item = [];
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'id'=>$data["id_pegawai"],
            'nama'=>$data["nama_pegawai"],
            'gaji'=>$data["gaji_pegawai"],
            'alamat'=>$data["alamat"]
        );
    }

    $response = array(
        'status'=> 'OK',
        'data'=>$item
    );

    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
?>