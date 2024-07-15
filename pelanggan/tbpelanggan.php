<?php
include_once("config.php");

// Ambil data dari tabel 
$result = mysqli_query($mysqli, "SELECT * FROM tbpelanggan");

?>
<div class="col-lg-9 mt-2">
    <div class="container">

    <h1 class="text-center">Data Customer</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="pelanggan/add.php" class="btn btn-primary">+ Customer</a>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-striped" style="width: 100%;">
            <thead class="thead-dark">
            <tr class="text-center">
                    <th>ID pelanggan</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilkan data pengguna dalam tabel
                while($user_data = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['idPelanggan']."</td>";
                    echo "<td>".$user_data['Nama']."</td>";
                    echo "<td>".$user_data['JK']."</td>";
                    echo "<td>".$user_data['Alamat']."</td>";
                    echo "<td>".$user_data['Telepon']."</td>";
                    // Tautan untuk edit dan delete dengan parameter nim
                    echo "<td>
                            <a href='pelanggan/edit.php?id=".$user_data['idPelanggan']."' class='btn btn-success btn-sm mr-2'>Edit</a>
                            <a href='pelanggan/delete.php?id=".$user_data['idPelanggan']."' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
    </div>

