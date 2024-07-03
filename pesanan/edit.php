<?php
include_once("config.php");

// Ambil data 
if(isset($_GET['id'])) {
    $idpesanan = $_GET['id'];
    //untuk menampilkan data sesuai id pesanan
    $query = "SELECT * FROM tbpesanan WHERE idpesanan='$idpesanan'";
    $result = mysqli_query($mysqli, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        header("Location: tbpesanan.php");
        exit();
    }
} else {
    // Jika ID pesanan tidak dikirimkan, redirect ke halaman utama
    header("Location: tbpesanan.php");
    exit();
}

// Proses update data pesanan
if(isset($_POST['submit'])){
    $idpesanan = $_POST['txt_id'];
    $tglpesanan = $_POST['tgl_pesan'];
    $tglselesai = $_POST['tgl_selesai'];
    $idpelanggan = $_POST['txt_idpelanggan'];
    $idlayanan = $_POST['txt_idlayanan'];
    $berat = $_POST['txt_berat'];
    $totalbayar = $_POST['txt_total'];
    $idkaryawan = $_POST['txt_idkaryawan'];

    $query = "UPDATE tbpesanan SET idpesanan='$idpesanan', tglpesanan='$tglpesanan', 
    tglselesai='$tglselesai', idpelanggan='$idpelanggan', idlayanan='$idlayanan', berat='$berat', totalbayar='$totalbayar', idkaryawan='$idkaryawan'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: tbpesanan.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Gagal mengedit data.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data pesanan</title>
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
            <h2 class="text-center mb-4">Edit Data pesanan</h2>
            <form action="" method="post">
            <div class="form-group">
                    <label for="txt_id">ID pesanan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id" value="<?php echo $data['idPesanan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Pesanan</label>
                    <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan" value="<?php echo $data['TglPesanan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?php echo $data['TglSelesai'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Pelanggan</label>
                    <input type="text" class="form-control" id="txt_idpelanggan" name="txt_idpelanggan" value="<?php echo $data['idPelanggan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Layanan</label>
                    <input type="text" class="form-control" id="txt_idlayanan" name="txt_idlayanan" value="<?php echo $data['idLayanan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Berat</label>
                    <input type="text" class="form-control" id="txt_berat" name="txt_berat" value="<?php echo $data['Berat'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Total Bayar</label>
                    <input type="text" class="form-control" id="txt_total" name="txt_total" value="<?php echo $data['TotalBayar'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Karyawan</label>
                    <input type="text" class="form-control" id="txt_idkaryawan" name="txt_idkaryawan" value="<?php echo $data['idKaryawan'];?>"  required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="tbpesanan.php" class="btn btn-secondary">Batal</a>
                </div>
                </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>