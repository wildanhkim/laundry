<?php
include "config.php";
$idkaryawan = (isset($_POST['txt_id'])) ? htmlentities($_POST['txt_id']) : "";
$nama = (isset($_POST['txt_nama'])) ? htmlentities($_POST['txt_nama']) : "";
$alamat = (isset($_POST['txt_alamat'])) ? htmlentities($_POST['txt_alamat']) : "";
$telepon = (isset($_POST['txt_telepon'])) ? htmlentities($_POST['txt_telepon']) : "";

if (!empty($_POST['submit'])) {
    $query = mysqli_query($mysqli, "UPDATE tbkaryawan SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE idkaryawan='$idkaryawan'");
    if ($query) {
        $message = '<script>alert("Data Karyawan Berhasil Diedit") ;
                    window.location="../karyawan"</script>';
        echo $message;

    } else {
        $message = '<script>alert("Data Karyawan Gagal Diedit")</script>';
        echo $message;
    } 
} 
?>