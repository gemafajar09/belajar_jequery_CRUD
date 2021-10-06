<?php
include "koneksi.php";

$simpan = $conn->query("INSERT INTO tb_user (nama,username,password) VALUES ('$_POST[nama]','$_POST[username]','$_POST[password]')");

if($simpan == TRUE)
{
    echo json_encode(['pesan' => 'berhasil']);
}else{
    echo json_encode(['pesan' => 'error']);
}