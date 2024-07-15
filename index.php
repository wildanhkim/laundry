<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <style>
        .dashboard-page {
            overflow-y: scroll; /* Tampilkan scroll bar vertikal */
        }

        .content-wrapper {
            min-height: 100vh; /* Ketinggian minimal konten setinggi viewport */
            padding-bottom: 80px; /* Optional: Padding di bagian bawah untuk memberikan ruang bagi footer */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa; /* Sesuaikan dengan warna latar belakang footer */
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
            if(isset($_GET['x']) && $_GET['x']=='dashboard') {
                include "dashboard.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pesanan') {
                include "pesanan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pelanggan') {
                include "pelanggan/tbpelanggan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='layanan') {
                include "layanan/tblayanan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pengambilan') {
                include "pengambilan/tbpengambilan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='report') {
                include "report.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='karyawan') {
                include "karyawan/tbkaryawan.php";
            }
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-cont    rol" id="exampleFormControlInput1"
                                placeholder="name@example.com" value="wildanhkm04@gmail.com" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Hobi</option>
                            <option value="1">ngaji</option>
                            <option value="2">makan</option>
                            <option value="3">Nonton</option>
                            <option value="4">Tidur</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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