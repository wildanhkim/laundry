<?php
include_once("config.php");

if(isset($_GET['id'])){
    $idkaryawan = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan id
    $result = mysqli_query($mysqli, "DELETE FROM tbkaryawan WHERE idKaryawan=$idkaryawan");

    if($result){
        header("Location: ../index.php?x=karyawan"); // Redirect ke halaman utama setelah berhasil menghapus data
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
