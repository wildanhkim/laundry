
            <!-- Content -->
        
            <?php 
            if(isset($_GET['x']) && $_GET['x']=='dashboard') {
                $page = "dashboard.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pesanan') {
                $page = "pesanan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pelanggan') {
                $page = "pelanggan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='layanan') {
                $page = "layanan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='pengambilan') {
                $page = "pengambilan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='report') {
                $page = "report.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='karyawan') {
                $page = "karyawan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='login') {
                include "login.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='logout') {
                include "proses/logout.php";
            }else{ 
                $page = "dashboard.php";
                include "main.php";
            }
            ?>
