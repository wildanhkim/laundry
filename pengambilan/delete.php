<?php
include_once("config.php");

if(isset($_GET['id'])){
    $idpengambilan = $_GET['id'];

    // Query untuk menghapus data pengguna berdasarkan id
    $result = mysqli_query($mysqli, "DELETE FROM tbpengambilan WHERE idPengambilan=$idpengambilan");

    if($result){
        header("Location: tbpengambilan.php"); // Redirect ke halaman utama setelah berhasil menghapus data
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
