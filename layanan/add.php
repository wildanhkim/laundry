<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Layanan</title>
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
            <h2 class="text-center mb-4">Tambah Data Layanan</h2>
            <form action="add.php" method="post">
                <div class="form-group">
                    <label for="txt_id">ID Layanan</label>
                    <input type="text" class="form-control" id="txt_id" name="txt_id">
                </div>
                <div class="form-group">
                    <label for="txt_nama">Jenis Layanan</label>
                    <input type="text" class="form-control" id="txt_jenis" name="txt_jenis" required>
                </div>
                <div class="form-group">
                    <label for="txt_telepon">Harga</label>
                    <input type="text" class="form-control" id="txt_harga" name="txt_harga" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="tblayanan.php" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    include_once("config.php");

    if(isset($_POST['submit'])){
        $idlayanan = $_POST['txt_id'];
        $jenislayanan = $_POST['txt_jenis'];
        $harga = $_POST['txt_harga'];

        $query = "INSERT INTO tblayanan (idlayanan, jenis_layanan, Harga ) VALUES ('$idlayanan', '$jenislayanan', '$harga')";
        $result = mysqli_query($mysqli, $query);

        if($result){
            header("Location: tblayanan.php");
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