<?php
include_once ("config.php");

// Ambil data dari tabel pesanan
$result = mysqli_query($mysqli, "SELECT * FROM tbpesanan");

?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Data Pesanan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="tbpesanan/add.php" class="btn btn-primary">+ Pesanan Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="width: 100%;">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>id</th>
                        <th>tgl_pesan</th>
                        <th>tgl_selesai</th>
                        <th>id pelanggan</th>
                        <th>id layanan</th>
                        <th>Berat</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
                        <th>id karyawan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['idPesanan'] . "</td>";
                        echo "<td>" . $user_data['TglPesanan'] . "</td>";
                        echo "<td>" . $user_data['TglSelesai'] . "</td>";
                        echo "<td>" . $user_data['idPelanggan'] . "</td>";
                        echo "<td>" . $user_data['idLayanan'] . "</td>";
                        echo "<td>" . $user_data['Berat'] . "</td>";
                        echo "<td>" . $user_data['TotalBayar'] . "</td>";
                        echo "<td>" . $user_data['Status_pesanan'] . "</td>";
                        echo "<td>" . $user_data['idKaryawan'] . "</td>";
                        echo "<td>
                                    <a href='tbpesanan/edit.php?id=" . $user_data['idPesanan'] . "' class='btn btn-success btn-sm mr-2'>Edit</a>
                                    <a href='tbpesanan/delete.php?id=" . $user_data['idPesanan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                                </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> </div> </div>
