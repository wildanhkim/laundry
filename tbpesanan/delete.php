<?php
include_once("config.php");

if(isset($_GET['id'])){
    $idpesanan = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan id
    $result = mysqli_query($mysqli, "DELETE FROM tbpesanan WHERE idpesanan=$idpesanan");

    if($result){
        header("Location: ../pesanan"); // Redirect ke halaman utama setelah berhasil menghapus data
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
