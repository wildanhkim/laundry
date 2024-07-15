<?php
include_once("config.php");

// Ambil data 
if(isset($_GET['id'])) {
    $idLayanan = $_GET['id'];
    //untuk menampilkan data sesuai nim
    $query = "SELECT * FROM tblayanan WHERE idLayanan='$idLayanan'";
    $result = mysqli_query($mysqli, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

} else {
    // Jika NIM tidak dikirimkan, redirect ke halaman utama
    header("Location: ../index.php?x=layanan");
    exit();
} }

// Proses update data 
if(isset($_POST['submit'])){
    $idlayanan = $_POST['txt_id'];
    $jenislayanan = $_POST['txt_jenis'];
    $harga = $_POST['txt_harga'];

    $query = "UPDATE tblayanan SET idLayanan='$idLayanan', Jenis_Layanan='$jenislayanan',Harga ='$harga'
    WHERE idLayanan='$idLayanan'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        header("Location: ../index.php?x=layanan");
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
    <title>Edit Data Karyawan</title>
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
            <h2 class="text-center mb-4">Edit Data Layanan</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txt_id">ID Layanan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id" value="<?php echo $data['idLayanan'];?>">
                </div>
                <div class="form-group">
                    <label for="txt_nama">Jenis Layanan</label>
                    <input type="text" class="form-control" id="txt_jenis" name="txt_jenis" value="<?php echo $data['Jenis_Layanan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="txt_alamat">Harga</label>
                    <textarea class="form-control" id="txt_harga" name="txt_harga" rows="3" required><?php echo $data['Harga'];?></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="../index.php?x=layanan" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
