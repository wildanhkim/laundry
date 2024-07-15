<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data pesanan</title>
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
            <h2 class="text-center mb-4">Tambah Data pesanan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID pesanan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id"  required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Pesanan</label>
                    <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan" required>
                </div>
                <div class="form-group">
                    <label for="tgl_tglambil">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Pelanggan</label>
                    <input type="text" class="form-control" id="txt_idpelanggan" name="txt_idpelanggan" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Layanan</label>
                    <input type="text" class="form-control" id="txt_idlayanan" name="txt_idlayanan" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Berat</label>
                    <input type="text" class="form-control" id="txt_berat" name="txt_berat" required>
                </div>
                <div class="form-group">
                    <label for="txt_ket">Total Bayar</label>
                    <input type="text" class="form-control" id="txt_total" name="txt_total" required>
                </div>
                <div class="form-group">
                    <label for="txt_nama">ID Karyawan</label>
                    <input type="text" class="form-control" id="txt_idkaryawan"  required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href=" ../index.php?x=pesanan" class="btn btn-secondary">Batal</a>
                </div>
                </form>
        </div>
    </div>

    <?php
    include_once("config.php");

    if (isset($_POST['submit'])) {
        $idpesanan = $_POST['txt_id'];
        $tglpesanan = $_POST['tgl_pesan'];
        $tglselesai = $_POST['tgl_selesai'];
        $idpelanggan = $_POST['txt_idpelanggan'];
        $idlayanan = $_POST['txt_idlayanan'];
        $berat = $_POST['txt_berat'];
        $totalbayar = $_POST['txt_total'];
        $idkaryawan = $_POST['txt_idkaryawan'];

        $query = "INSERT INTO tbpesanan (idpesanan, tglpesanan, tglselesai, idpelanggan, idlayanan, berat, totalbayar, idkaryawan) VALUES ('$idpesanan', '$tglpesanan', '$tglselesai', '$idpelanggan', '$idlayanan', '$berat', '$totalbayar', '$idkaryawan')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: ../index.php?x=pesanan");
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