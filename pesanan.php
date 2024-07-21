<?php
include "config.php";

// Ambil data dari tabel pesanan
$result = mysqli_query($mysqli, "SELECT * FROM tbpesanan");
while ($data = mysqli_fetch_array($result)) {
    $results[] = $data;
}
?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Data Pesanan</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="addpesanan" class="btn btn-primary">+ Pesanan Baru</a>
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
                    foreach ($results as $data) {
                        echo "<tr>";
                        echo "<td>" . $data['idPesanan'] . "</td>";
                        echo "<td>" . $data['TglPesanan'] . "</td>";
                        echo "<td>" . $data['TglSelesai'] . "</td>";
                        echo "<td>" . $data['idPelanggan'] . "</td>";
                        echo "<td>" . $data['idLayanan'] . "</td>";
                        echo "<td>" . $data['Berat'] . "</td>";
                        echo "<td>" . $data['TotalBayar'] . "</td>";
                        echo "<td>" . $data['Status_pesanan'] . "</td>";
                        echo "<td>" . $data['idKaryawan'] . "</td>";
                        echo "<td>
                            <button type='button' class='btn btn-success btn-sm mr-2' data-bs-toggle='modal' data-bs-target='#ModalEdit"  . $data['idPesanan'] . "'>Edit</button>
                            <a href='proses/delete_pesanan.php?id=" . $data['idPesanan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<?php
foreach ($results as $data) {
    ?>
    <div class="modal fade" id="ModalEdit<?php echo $data['idPesanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data pesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/edit_pesanan.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $data['idPesanan'] ?>" name="idpesanan">
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idpesanan"
                                        name="idpesanan" required value="<?php echo $data['idPesanan'] ?>" disabled>
                                    <label for="floatingInput">ID Pesanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Pesanan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="tglpesanan"
                                        name="tgl_pesan" required value="<?php echo $data['TglPesanan'] ?>">
                                    <label for="floatingInput">Tanggal Pesanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan Tanggal Pesanan.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="tglselesai"
                                    name="tgl_selesai" required value="<?php echo $data['TglSelesai'] ?>">
                                    <label for="floatingInput">Tanggal Selesai</label>
                                    <div class="invalid-feedback">
                                        Masukkan Tanggal Selesai.
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idPelanggan"
                                        name="txt_idpelanggan" required value="<?php echo $data['idPelanggan'] ?>">
                                    <label for="floatingInput">ID Pelanggan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Pelanggan.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idLayanan"
                                    name="txt_idlayanan" required value="<?php echo $data['idLayanan'] ?>">
                                    <label for="floatingInput">ID Layanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Layanan.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Berat"
                                        name="txt_berat" required value="<?php echo $data['Berat'] ?>">
                                    <label for="floatingInput">Berat</label>
                                    <div class="invalid-feedback">
                                        Masukkan Berat.
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Total Bayar"
                                        name="txt_total" required value="<?php echo $data['TotalBayar'] ?>">
                                    <label for="floatingInput">Total Bayar</label>
                                    <div class="invalid-feedback">
                                        Masukkan Total Bayar.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="status" name="txt_status"  required>
                                        <option value="proses" <?php echo ($data['Status_pesanan'] == 'proses') ? 'selected' : ''; ?>>Proses</option>
                                        <option value="selesai" <?php echo ($data['Status_pesanan'] == 'selesai') ? 'selected' : ''; ?>>Selesai</option>
                                    </select>
                                    <label for="status">Status Pesanan</label>
                                    <div class="invalid-feedback">
                                        Pilih Status Pesanan.
                                    </div>
                                </div>
                            </div>

                        
                            <div class="col-lg-3">
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
                    <button type="submit" class="btn btn-danger" name="submit_edit_pesanan" value="1234">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
} ?>
<!-- Akhir Modal Edit-->