<?php
include_once ("config.php");

// Ambil data dari tabel 
$result = mysqli_query($mysqli, "SELECT * FROM tbpengambilan");

?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Data pengambilan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="pengambilan/add.php" class="btn btn-primary">+ Data Pengambilan</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="width: 100%;">
                <thead class="thead-dark">
                    <tr class="text-center">
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
                        // Tautan untuk edit dan delete 
                        echo "<td>
                            <a href='pengambilan/edit.php?id=" . $user_data['idPengambilan'] . "' class='btn btn-success btn-sm mr-2'>Edit</a>
                            <a href='pengambilan/delete.php?id=" . $user_data['idPengambilan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div> </div>

