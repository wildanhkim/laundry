<?php
include_once("config.php");

// Ambil data dari tabel Layanan
$result = mysqli_query($mysqli, "SELECT * FROM tblayanan");
while ($data = mysqli_fetch_array($result)) {
    $results[] = $data;
}
?>
<div class="col-lg-9 mt-2">
    <div class="container">

        <h1 class="text-center">Layanan Laundry</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="addlayanan" class="btn btn-primary">+ Layanan</a>
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
                    foreach ($results as $data) {
                        echo "<tr>";
                        echo "<td>" . $data['idLayanan'] . "</td>";
                        echo "<td>" . $data['Jenis_Layanan'] . "</td>";
                        echo "<td>" . $data['Harga'] . "</td>";
                        echo "<td class='text-center'>
                            <button type='button' class='btn btn-success btn-sm mr-2' data-bs-toggle='modal' data-bs-target='#ModalEdit" . $data['idLayanan'] . "'>Edit</button>
                            <a href='proses/delete_layanan.php?id=" . $data['idLayanan'] . "' class='btn btn-danger btn-sm'>Delete</a>
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
    <div class="modal fade" id="ModalEdit<?php echo $data['idLayanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Data Layanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="needs-validation" novalidate action="proses/edit_layanan.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $data['idLayanan'] ?>" name="idlayanan">
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="idLayanan"
                                        name="idlayanan" required value="<?php echo $data['idLayanan'] ?>" disabled>
                                    <label for="floatingInput">ID Layanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan ID Layanan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Jenis Layanan"
                                        name="txt_jenis" required value="<?php echo $data['Jenis_Layanan'] ?>">
                                    <label for="floatingInput">Jenis Layanan</label>
                                    <div class="invalid-feedback">
                                        Masukkan Jenis Layanan.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Harga"
                                        name="txt_harga" required value="<?php echo $data['Harga'] ?>">
                                    <label for="floatingInput">Harga</label>
                                    <div class="invalid-feedback">
                                        Masukkan Harga.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="submit_edit_layanan" value="1234">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php
} ?>
<!-- Akhir Modal Edit-->