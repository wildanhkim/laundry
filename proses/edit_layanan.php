<?php
include "config.php";
$idlayanan = (isset($_POST['idlayanan'])) ? htmlentities($_POST['idlayanan']) : "";
$jenislayanan = (isset($_POST['txt_jenis'])) ? htmlentities($_POST['txt_jenis']) : "";
$harga = (isset($_POST['txt_harga'])) ? htmlentities($_POST['txt_harga']) : "";

if (!empty($_POST['submit_edit_layanan'])) {
    $query = mysqli_query($mysqli, "UPDATE tblayanan SET jenis_layanan='$jenislayanan', harga='$harga' WHERE idlayanan='$idlayanan'");
    if ($query) {
        $message = '<script>alert("Data Layanan Berhasil Diedit") ;
                    window.location="../layanan"</script>';
        echo $message;

    } else {
        $message = '<script>alert("Data Layanan Gagal Diedit")</script>';
        echo $message;
    } 
} 
?>