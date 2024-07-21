<?php
include "config.php";
$idpesanan = (isset($_POST['idpesanan'])) ? htmlentities($_POST['idpesanan']) : "";
$tglpesanan = (isset($_POST['tgl_pesan'])) ? htmlentities($_POST['tgl_pesan']) : "";
$tglselesai = (isset($_POST['tgl_selesai'])) ? htmlentities($_POST['tgl_selesai']) : "";
$idpelanggan = (isset($_POST['txt_idpelanggan'])) ? htmlentities($_POST['txt_idpelanggan']) : "";
$idlayanan = (isset($_POST['txt_idlayanan'])) ? htmlentities($_POST['txt_idlayanan']) : "";
$berat = (isset($_POST['txt_berat'])) ? htmlentities($_POST['txt_berat']) : "";
$totalbayar = (isset($_POST['txt_total'])) ? htmlentities($_POST['txt_total']) : "";
$status = (isset($_POST['txt_status'])) ? htmlentities($_POST['txt_status']) : "";
$idkaryawan = (isset($_POST['txt_idkaryawan'])) ? htmlentities($_POST['txt_idkaryawan']) : "";

if (!empty($_POST['submit_edit_pesanan'])) {
        $query = mysqli_query($mysqli, "UPDATE tbpesanan SET  tglpesanan='$tglpesanan', 
    tglselesai='$tglselesai', idpelanggan='$idpelanggan', idlayanan='$idlayanan', berat='$berat', totalbayar='$totalbayar', status_pesanan ='$status', idkaryawan='$idkaryawan' WHERE idpesanan='$idpesanan' ");
        if ($query) {
            $message = '<script>alert("Pesanan Berhasil Diedit") ;
                    window.location="../pesanan"</script>';
                    echo $message;

        } else {
            $message = '<script>alert("Pesanan Gagal Diedit")</script>';
            echo $message;
        } 
    } 
?>