<?php
include_once ("config.php");

// Ambil data dari tabel 
$result = mysqli_query($mysqli, "SELECT * FROM tbpengambilan");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pengambilan</title>
    <!-- link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Data pengambilan</h1>
        <!-- Tautan untuk tambah pengambilan baru -->
        <a href="add.php" class="btn btn-primary mb-3">Tambah data pengambilan</a>
        <a href="../index.php" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>id pengambilan</th>
                    <th>Nama</th>
                    <th>id Pesanan</th>
                    <th>Tgl Ambil</th>
                    <th>Ket</th>
                    <th>id karyawan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilkan data pengguna dalam tabel
                while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['idPengambilan'] . "</td>";
                    echo "<td>" . $user_data['Nama'] . "</td>";
                    echo "<td>" . $user_data['idPesanan'] . "</td>";
                    echo "<td>" . $user_data['tglAmbil'] . "</td>";
                    echo "<td>" . $user_data['Ket'] . "</td>";
                    echo "<td>" . $user_data['idKaryawan'] . "</td>";
                    // Tautan untuk edit dan delete dengan parameter nim
                    echo "<td>
                            <a href='edit.php?id=" . $user_data['idPengambilan'] . "' class='btn btn-success btn-sm mr-2'>Edit</a>
                            <a href='delete.php?id=" . $user_data['idPengambilan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="../index.php" class="btn btn-secondary">Kembali ke Dashboard</a>
    </div>

    <!-- Tambahkan script Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>