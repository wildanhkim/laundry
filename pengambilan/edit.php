<?php
include_once("config.php");

// Ambil data 
if(isset($_GET['id'])) {
    $idpengambilan = $_GET['id'];
    //untuk menampilkan data sesuai id pengambilan
    $query = "SELECT * FROM tbpengambilan WHERE idpengambilan='$idpengambilan'";
    $result = mysqli_query($mysqli, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        header("Location: ../index.php?x=pengambilan");
        exit();
    }
}

// Proses update data pengambilan
if(isset($_POST['submit'])){
    $idpengambilan = $_POST['txt_id'];
    $nama = $_POST['txt_nama'];
    $idpesanan = $_POST['txt_idpesanan'];
    $tglambil = $_POST['tgl_tglambil'];
    $ket = $_POST['txt_ket'];
    $idkaryawan = $_POST['txt_idkaryawan'];

    $query = "UPDATE tbpengambilan SET idpengambilan='$idpengambilan', nama='$nama', idpesanan='$idpesanan', tglAmbil='$tglambil', ket='$ket', idkaryawan='$idkaryawan' WHERE idpengambilan='$idpengambilan'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: ../index.php?x=pengambilan");
        exit();
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengambilan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Edit Data Pengambilan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID Pengambilan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id" value="<?php echo $data['idPengambilan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">Nama</label>
                    <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="<?php echo $data['Nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Pesanan</label>
                    <input type="text" class="form-control" id="txt_idpesanan" name="txt_idpesanan" value="<?php echo $data['idPesanan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Ambil</label>
                    <input type="date" class="form-control" id="tgl_tglambil" name="tgl_tglambil" value="<?php echo $data['tglAmbil'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Keterangan</label>
                    <input type="text" class="form-control" id="txt_ket" name="txt_ket" value="<?php echo $data['Ket'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Karyawan</label>
                    <input type="text" class="form-control" id="txt_idkaryawan" name="txt_idkaryawan" value="<?php echo $data['idKaryawan'];?>" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="../index.php?x=pengambilan" class="btn btn-secondary">Batal</a>
                </div>
                </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>