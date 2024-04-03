<?php
include "conn.php";

$id = $_GET['id'];

$sql = "SELECT * FROM pegawai WHERE id_pegawai = $id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

if ($data) {
    $item = array(
        'id' => $data["id_pegawai"],
        'nama' => $data["nama_pegawai"],
        'gaji' => $data["gaji_pegawai"],
        'alamat' => $data["alamat"]
    );

    $response = array(
        'status' => 'OK',
        'data' => $item
    );
} else {
    $response = array(
        'status' => 'ERROR',
        'message' => 'Data not found'
    );
}

header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);

?>