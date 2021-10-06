<?php
include "koneksi.php";
$hapus = $conn->query("DELETE FROM tb_user WHERE id_user = '$_POST[id_user]'");

if($hapus == TRUE)
{
    echo json_encode(['pesan' => 'berhasil']);
}else{
    echo json_encode(['pesan' => 'gagal']);
}