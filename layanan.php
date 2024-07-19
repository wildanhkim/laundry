<?php
include_once("config.php");

// Ambil data dari tabel Layanan
$result = mysqli_query($mysqli, "SELECT * FROM tblayanan");

?>
<div class="col-lg-9 mt-2">
    <div class="container">


<h1 class="text-center">Layanan Laundry</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="tblayanan/add.php" class="btn btn-primary">+ Layanan</a>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-striped" style="width: 100%;">
            <thead class="thead-dark">
            <tr class="text-center">
                    <th>ID Layanan</th>
                    <th>Jenis Layanan</th>
                    <th>Harga</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Tampilkan data pengguna dalam tabel
                while($user_data = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['idLayanan']."</td>";
                    echo "<td>".$user_data['Jenis_Layanan']."</td>";
                    echo "<td>".$user_data['Harga']."</td>";
                    // Tautan untuk edit dan delete 
                    echo "<td class='text-center'>
                            <a href='tblayanan/edit.php?id=".$user_data['idLayanan']."' class='btn btn-success btn-sm mr-2'>Edit</a>
                            <a href='tblayanan/delete.php?id=".$user_data['idLayanan']."' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </div>
