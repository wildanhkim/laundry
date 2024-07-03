<?php
include_once("config.php");

if(isset($_GET['id'])){
    $idpelanggan = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan id
    $result = mysqli_query($mysqli, "DELETE FROM tbpelanggan WHERE idpelanggan=$idpelanggan");

    if($result){
        header("Location: tbpelanggan.php"); // Redirect ke halaman utama setelah berhasil menghapus data
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
