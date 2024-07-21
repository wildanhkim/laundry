<?php
include "config.php";

// Ambil data dari tabel pesanan
$result = mysqli_query($mysqli, "SELECT * FROM tbpengambilan");
while ($data = mysqli_fetch_array($result)) {
    $results[] = $data;
}
?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Data pengambilan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="addpengambilan" class="btn btn-primary">+ Data Pengambilan</a>
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
                    foreach ($results as $data) {

                        echo "<tr>";
                        echo "<td>" . $data['idPengambilan'] . "</td>";
                        echo "<td>" . $data['Nama'] . "</td>";
                        echo "<td>" . $data['idPesanan'] . "</td>";
                        echo "<td>" . $data['tglAmbil'] . "</td>";
                        echo "<td>" . $data['Ket'] . "</td>";
                        echo "<td>" . $data['idKaryawan'] . "</td>";
                        // Tautan untuk edit dan delete 
                        echo "<td>
                            <button type='button' class='btn btn-success btn-sm mr-2' data-bs-toggle='modal' data-bs-target='#ModalEdit" . $data['idPengambilan'] . "'>Edit</button>
                            <a href='proses/delete_pengambilan.php?id=" . $data['idPengambilan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
foreach ($results as $data) {
    ?>
    <div class="modal fade" id="ModalEdit<?php echo $data['idPengambilan'] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Pengambilan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/edit_pengambilan.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $data['idPengambilan'] ?>" name="idpengambilan">
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idPengambilan"
                                        name="idpengambilan" required value="<?php echo $data['idPengambilan'] ?>" disabled>
                                    <label for="floatingInput">ID Pengambilan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Pengambilan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama"
                                        name="txt_nama" required value="<?php echo $data['Nama'] ?>">
                                    <label for="floatingInput">Nama</label>
                                    <div class="invalid-feedback">
                                        Masukkan Nama.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idPesanan"
                                        name="txt_idpesanan" required value="<?php echo $data['idPesanan'] ?>">
                                    <label for="floatingInput">ID Pesanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Pesanan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="tglAmbil"
                                        name="tgl_tglambil" required value="<?php echo $data['tglAmbil'] ?>">
                                    <label for="floatingInput">Tanggal Ambil</label>
                                    <div class="invalid-feedback">
                                        Masukkan Tanggal Ambil.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan"
                                        name="txt_ket" required value="<?php echo $data['Ket'] ?>">
                                    <label for="floatingInput">Keterangan</label>
                                    <div class="invalid-feedback">
                                        Masukkan Keterangan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idKaryawan"
                                        name="txt_idkaryawan" required value="<?php echo $data['idKaryawan'] ?>">
                                    <label for="floatingInput">ID Karyawan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Karyawan.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="submit_edit_pengambilan" value="1">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
} ?>
<!-- Akhir Modal Edit-->