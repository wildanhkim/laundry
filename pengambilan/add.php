<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengambilan</title>
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
            <h2 class="text-center mb-4">Tambah Data Pengambilan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID Pengambilan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id"  required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">Nama</label>
                    <input type="text" class="form-control" id="txt_nama" name="txt_nama" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Pesanan</label>
                    <input type="text" class="form-control" id="txt_idpesanan" name="txt_idpesanan" required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Ambil</label>
                    <input type="date" class="form-control" id="tgl_tglambil" name="tgl_tglambil" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Keterangan</label>
                    <input type="text" class="form-control" id="txt_ket" name="txt_ket">
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Karyawan</label>
                    <input type="text" class="form-control" id="txt_idkaryawan" name="txt_idkaryawan" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="tbpelanggan.php" class="btn btn-secondary">Batal</a>
                </div>
                </form>
        </div>
    </div>

    <?php
    include_once("config.php");

    if (isset($_POST['submit'])) {
        $idpengambilan = $_POST['txt_id'];
        $nama = $_POST['txt_nama'];
        $idpesanan = $_POST['txt_idpesanan'];
        $tglambil = $_POST['tgl_tglambil'];
        $ket = $_POST['txt_ket'];
        $idkaryawan = $_POST['txt_idkaryawan'];

        $query = "INSERT INTO tbpengambilan (idpengambilan, nama, idpesanan, tglAmbil, ket, idkaryawan) VALUES ('$idpengambilan', '$nama', '$idpesanan', '$tglambil', '$ket', '$idkaryawan')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: tbpengambilan.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Gagal menambahkan data.</div>";
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>