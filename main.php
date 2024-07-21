<?php
session_start();
if (empty($_SESSION['user'])) {
    header('location:login');
}
include "config.php";
$query = mysqli_query($mysqli, "SELECT * from tbuser where nama='$_SESSION[user]' ");
$hasil = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barakah laundry - Aplikasi manajemen kasir laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <style>
        .dashboard-page {
            overflow-y: scroll;
            /* Tampilkan scroll bar vertikal */
        }

        .content-wrapper {
            min-height: 100vh;
            /* Ketinggian minimal konten setinggi viewport */
            padding-bottom: 80px;
            /* Optional: Padding di bagian bawah untuk memberikan ruang bagi footer */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            /* Sesuaikan dengan warna latar belakang footer */
            padding: 10px 0;
            text-align: center;
        }
    </style>

</head>

<body class="dashboard-page">

    <!-- Header -->
    <?php include "header.php" ?>
    <!--end header-->

    <div class="container-lg">
        <div class="row">
            <!-- sidebar -->
            <?php include "sidebar.php" ?>
            <!-- end sidebar -->

            <!-- Content -->
            <?php
            include $page;
            ?>
        </div>
        <!--End Content-->
    </div>

    <!--Footer-->
    <div class="text-center bg-light fixed-bottom py-1">
        Copyright 2024 WildanHkm
    </div>
    <!--End Footer-->

    </div>

    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profil Barakah Laundry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-cont    rol" id="exampleFormControlInput1"
                                placeholder="name@example.com" value="barakah@laundry.com" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Moto</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Anda" value="Laundry Cepat Sesuai Syari'at" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="exampleFormControlTextarea1" value="Gp. Alue Awee" disabled></input>
                        </div>
                        <label for="txt_nama">Jenis Layanan: </label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="001">001 - Cuci Setrika</option>
                            <option value="002">002 - Cuci</option>
                            <option value="003">003 - Setrika</option>
                            <option value="004">004 - Cuci Khusus/ptg</option>
                            <option value="005">005 - Express</option>
                            <option value="006">006 - Gorden</option>
                  
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>