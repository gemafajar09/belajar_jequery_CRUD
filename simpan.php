<?php
include "koneksi.php";
if($_POST['id_user'] == '')
{
    $simpan = $conn->query("INSERT INTO tb_user (nama,username,password) VALUES ('$_POST[nama]','$_POST[username]','$_POST[password]')");
}else{
    $simpan = $conn->query("UPDATE tb_user SET nama = '$_POST[nama]',username = '$_POST[username]',password='$_POST[password]' WHERE id_user = '$_POST[id_user]'");
}

if($simpan == TRUE)
{
    echo json_encode(['pesan' => 'berhasil']);
}else{
    echo json_encode(['pesan' => 'error']);
}