<?php
include "config.php";

// Ambil data dari tabel pelanggan
$result = mysqli_query($mysqli, "SELECT * FROM tbpelanggan");
while ($data = mysqli_fetch_array($result)) {
    $results[] = $data;
}
?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Data Customer</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="addpelanggan" class="btn btn-primary">+ Customer</a>
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
                    foreach ($results as $data) {
                        echo "<tr>";
                        echo "<td>" . $data['idPelanggan'] . "</td>";
                        echo "<td>" . $data['Nama'] . "</td>";
                        echo "<td>" . $data['JK'] . "</td>";
                        echo "<td>" . $data['Alamat'] . "</td>";
                        echo "<td>" . $data['Telepon'] . "</td>";
                        echo "<td>
                            <button type='button'  class='btn btn-success btn-sm mr-2' data-bs-toggle='modal' data-bs-target='#ModalEdit" . $data['idPelanggan'] . "'>Edit</button>
                            <a href='proses/delete_pelanggan.php?id=" . $data['idPelanggan'] . "' class='btn btn-danger btn-sm'>Delete</a>
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
    <div class="modal fade" id="ModalEdit<?php echo $data['idPelanggan'] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/edit_pelanggan.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $data['idPelanggan'] ?>" name="idpelanggan">
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idPelanggan"
                                        name="idpelanggan" required value="<?php echo $data['idPelanggan'] ?>" disabled>
                                    <label for="floatingInput">ID Pelanggan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Pelanggan.
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
                            <div class="col-lg-2">
                                <div class="form-floating mb-3">
                                    <div class="form-group">
                                    <label for="floatingInput">Jenis Kelamin</label><br>
                                        <input type="radio" id="jk_l" name="radio_jk" value="L" <?php echo ($data['JK'] == 'L') ? 'checked' : ''; ?>>
                                        <label for="jk_l">Laki-laki</label><br>
                                        <input type="radio" id="jk_p" name="radio_jk" value="P" <?php echo ($data['JK'] == 'P') ? 'checked' : ''; ?>>
                                        <label for="jk_p">Perempuan</label>
                                    </div>
                                    
                                    <div class="invalid-feedback">
                                        Masukkan Jenis Kelamin.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Alamat"
                                        name="txt_alamat" required value="<?php echo $data['Alamat'] ?>">
                                    <label for="floatingInput">Alamat</label>
                                    <div class="invalid-feedback">
                                        Masukkan Alamat.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Telepon"
                                        name="txt_telepon" required value="<?php echo $data['Telepon'] ?>">
                                    <label for="floatingInput">Telepon</label>
                                    <div class="invalid-feedback">
                                        Masukkan Telepon.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="submit_edit_pelanggan" value="123478">Save
                        changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
} ?>
<!-- Akhir Modal Edit-->