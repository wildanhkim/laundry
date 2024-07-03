

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <style>
        :root {
            --custom-bg-color: #248cbc;
        }

        .bg-primary {
            background-color: var(--custom-bg-color) !important;
        }

        .nav-link.active{
            background-color: var(--custom-bg-color) !important;
        }

        .btn-primary {
            background-color: var(--custom-bg-color) !important;
        }

        .dropdown-item:active {
            background-color: var(--custom-bg-color) !important;
        }
        .image{
            max-width: 100%;
            height: auto;
        }

    </style>

</head>

<body class="dashboard-page">
    
    <!-- Header -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand bg-primary navbar-dark">

        <div class="container-lg">
            <a class="navbar-brand" style="font-family: Comic Sans MS;" href="rotisele.html">
                <img src="fix.png" alt="Logo" width="39" class="d-inline-block image" >
                Barakah-Laundry
            </a>
        </div>

        <div class="container-fluid justify-content-end">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="bi bi-person"></i>
                                Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-check"></i>
                                    B</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="bi bi-code-slash"></i> J</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login.html"><i class="bi bi-power"></i> Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end header-->
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-1 mt-2 border">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> Menu </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="nav nav-pills flex-column flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" aria-current="page" href="index.html"><i class="bi bi-house-door"></i> Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark " href="pesanan/tbpesanan.php"><i class="bi bi-bag-heart"></i> Pesanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark"  href="pelanggan/tbpelanggan.php"><i class="bi bi-whatsapp"></i> Pelanggan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="layanan/tblayanan.php" ><i class="bi bi-instagram"></i> Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark " href="pengambilan/tbpengambilan.php"></i><i class="bi bi-twitter-x"></i> Pengambilan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark"  href="karyawan/tbkaryawan.php"><i class="bi bi-bar-chart-line"></i> Data Karyawan</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end sidebar -->
            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <img src="Design Laundry.jpg" class="d-block mx-auto w-50" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="barokah.jpg" class="d-block mx-auto w-50 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="logo.png" class="d-block mx-auto w-50" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
                            <input type="email" class="form-control" id="exampleFormControlInput1"
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

    <script>
        $(document).ready(function()
    {
        if($('body').hasClass('dashboard-page')){
            $('.nav-link[href="index.html"]').removeClass('link-dark').addClass('active link-light')
        }else if($('body').hasClass('table-page')){
            $('.nav-link[href="table.html"]').removeClass('link-dark').addClass('active link-light')
        }else if($('body').hasClass('biodata-page')){
            $('.nav-link[href="biodata.html"]').removeClass('link-dark').addClass('active link-light')
        }else if($('body').hasClass('login-page')){
            $('.nav-link[href="login.html"]').removeClass('link-dark').addClass('active link-light')
        }
    })
    </script>

</body>

</html>