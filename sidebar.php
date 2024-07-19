<link rel="stylesheet" href="style.css">
<div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-3 mt-2 border">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> Menu </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="nav nav-pills flex-column flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='dashboard') || !isset($_GET['x']) ? 'active link-light' : 'link-dark' ; ?> "href="dashboard"><i class="bi bi-house-door"></i> Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='pesanan') ? 'active link-light' : 'link-dark' ; ?> "href="pesanan"><i class="bi bi-cart-plus"></i> Pesanan</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='pelanggan') ? 'active link-light' : 'link-dark' ; ?> "  href="pelanggan"><i class="bi bi-person-check"></i> Customer</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='layanan') ? 'active link-light' : 'link-dark' ; ?> " href="layanan" ><i class="bi bi-card-checklist"></i> Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='pengambilan') ? 'active link-light' : 'link-dark' ; ?> " href="pengambilan"><i class="bi bi-bag-check"></i> Pengambilan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='report') ? 'active link-light' : 'link-dark' ; ?> " href="report"></i><i class="bi bi-bar-chart-line"></i> Report</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='karyawan') ? 'active link-light' : 'link-dark' ; ?> "  href="karyawan"><i class="bi bi-person-lock"></i> Data Karyawan</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>