<?php
include_once("config.php");

if(isset($_GET['id'])){
    $idlayanan = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan id
    $result = mysqli_query($mysqli, "DELETE FROM tblayanan WHERE idlayanan=$idlayanan");

    if($result){
        header("Location: ../index.php?x=layanan"); // Redirect ke halaman utama setelah berhasil menghapus data
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
