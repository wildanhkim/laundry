
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
            }elseif(isset($_GET['x']) && $_GET['x']=='karyawan') {
                $page = "karyawan.php";
                include "main.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='login') {
                include "login.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='logout') {
                include "proses/logout.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='addpesanan') {
                include "proses/add_pesanan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='addpelanggan') {
                include "proses/add_pelanggan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='addlayanan') {
                include "proses/add_layanan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='addpengambilan') {
                include "proses/add_pengambilan.php";
            }elseif(isset($_GET['x']) && $_GET['x']=='addkaryawan') {
                include "proses/add_karyawan.php";
            }else{ 
                $page = "dashboard.php";
                include "main.php";
            }
            ?>
