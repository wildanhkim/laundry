<?php
    include "config.php";

    if (isset($_POST['submit'])) {
        $idpelanggan = $_POST['txt_id'];
        $nama = $_POST['txt_nama'];
        $jk = $_POST['radio_jk'];
        $alamat = $_POST['txt_alamat'];
        $telepon = $_POST['txt_telepon'];

        $query = "INSERT INTO tbpelanggan (idpelanggan, nama, jk, alamat, telepon) VALUES ('$idpelanggan', '$nama', '$jk', '$alamat', '$telepon')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            header("Location: pelanggan");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Gagal menambahkan data.</div>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Customer</title>
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
            <h2 class="text-center mb-4">Tambah Data pelanggan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID pelanggan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id">
                </div>
                <div class="form-group">
                    <label for="txt_nama">Nama</label>
                    <input type="text" class="form-control" id="txt_nama" name="txt_nama" required>
                </div>
                <div class="form-group">
                    <label for="radio_jk">Jenis Kelamin</label><br>
                    <label><input type="radio" name="radio_jk" value="l" checked> Laki-laki</label>
                    <label><input type="radio" name="radio_jk" value="p"> Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="txt_alamat">Alamat</label>
                    <textarea class="form-control" id="txt_alamat" name="txt_alamat" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="txt_telepon">Telepon</label>
                    <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" placeholder="08..."
                        required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="pelanggan" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>