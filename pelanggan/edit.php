<?php
include_once("config.php");

// Ambil data 
if(isset($_GET['id'])) {
    $idpelanggan = $_GET['id'];
    //untuk menampilkan data sesuai nim
    $query = "SELECT * FROM tbpelanggan WHERE idpelanggan='$idpelanggan'";
    $result = mysqli_query($mysqli, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        header("Location: tbpelanggan.php");
        exit();
    }
} else {
    // Jika NIM tidak dikirimkan, redirect ke halaman utama
    header("Location: tbpelanggan.php");
    exit();
}

// Proses update data mahasiswa
    if(isset($_POST['submit'])){
        $idpelanggan = $_POST['txt_id'];
        $nama = $_POST['txt_nama'];
        $jk = $_POST['radio_jk'];
        $alamat = $_POST['txt_alamat'];
        $telepon = $_POST['txt_telepon'];

    $query = "UPDATE tbpelanggan SET idpelanggan='$idpelanggan', Nama='$nama', JK='$jk', Alamat='$alamat', Telepon='$telepon' WHERE idpelanggan='$idpelanggan'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: tbpelanggan.php");
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
    <title>Edit Data pelanggan</title>
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
            <h2 class="text-center mb-4">Edit Data pelanggan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID pelanggan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id" value="<?php echo $data['idPelanggan'];?>">
                </div>
                <div class="form-group">
                    <label for="txt_nama">Nama</label>
                    <input type="text" class="form-control" id="txt_nama" name="txt_nama" value="<?php echo $data['Nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="radio_jk">Jenis Kelamin</label><br>
                    <label><input type="radio" name="radio_jk" value="l" checked> Laki-laki</label>
                    <label><input type="radio" name="radio_jk" value="p"> Perempuan</label>
                </div>
                <div class="form-group">
                    <label for="txt_alamat">Alamat</label>
                    <textarea class="form-control" id="txt_alamat" name="txt_alamat" rows="3" required><?php echo $data['Alamat'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="txt_telepon">Telepon</label>
                    <input type="text" class="form-control" id="txt_telepon" name="txt_telepon" value="<?php echo $data['Telepon'];?>" placeholder="08..." required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="tbpelanggan.php" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
