<?php
include "config.php";
$idpengambilan = (isset($_POST['txt_id'])) ? htmlentities($_POST['txt_id']) : "";
$nama = (isset($_POST['txt_nama'])) ? htmlentities($_POST['txt_nama']) : "";
$idpesanan = (isset($_POST['txt_idpesanan'])) ? htmlentities($_POST['txt_idpesanan']) : "";
$tglambil = (isset($_POST['tgl_tglambil'])) ? htmlentities($_POST['tgl_tglambil']) : "";
$ket = (isset($_POST['txt_ket'])) ? htmlentities($_POST['txt_ket']) : "";
$idkaryawan = (isset($_POST['txt_idkaryawan'])) ? htmlentities($_POST['txt_idkaryawan']) : "";

if (!empty($_POST['submit_edit_pengambilan'])) {
    $query = mysqli_query($mysqli, "UPDATE tbpengambilan SET  nama='$nama', idpesanan='$idpesanan', tglambil='$tglambil', ket='$ket', idkaryawan='$idkaryawan' WHERE idpengambilan='$idpengambilan'");
    if ($query) {
        $message = '<script>alert("Pengambilan Berhasil Diedit") ;
                    window.location="../pengambilan"</script>';
        echo $message;

    } else {
        $message = '<script>alert("Pengambilan Gagal Diedit")</script>';
        echo $message;
    } 
} 
?>