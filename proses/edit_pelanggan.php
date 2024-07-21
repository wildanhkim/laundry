<?php
include "config.php";
$idpelanggan = (isset($_POST['idpelanggan'])) ? htmlentities($_POST['idpelanggan']) : "";
$nama = (isset($_POST['txt_nama'])) ? htmlentities($_POST['txt_nama']) : "";
$jk = (isset($_POST['radio_jk'])) ? htmlentities($_POST['radio_jk']) : "";
$alamat = (isset($_POST['txt_alamat'])) ? htmlentities($_POST['txt_alamat']) : "";
$telepon = (isset($_POST['txt_telepon'])) ? htmlentities($_POST['txt_telepon']) : "";

if (!empty($_POST['submit_edit_pelanggan'])) {
    $query = mysqli_query($mysqli, "UPDATE tbpelanggan SET nama='$nama', jk='$jk', alamat='$alamat', telepon='$telepon' WHERE idpelanggan='$idpelanggan'");
    if ($query) {
        $message = '<script>alert("Data Pelanggan Berhasil Diedit") ;
                    window.location="../pelanggan"</script>';
        echo $message;

    } else {
        $message = '<script>alert("Data Pelanggan Gagal Diedit")</script>';
        echo $message;
    } 
} 
?>