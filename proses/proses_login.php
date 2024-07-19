<?php
    session_start();

    include  "config.php";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? htmlentities($_POST['password'])  : "" ;
    if (!empty($_POST['submit'])) {
        $query = mysqli_query($mysqli, "SELECT * from user where nama='$username' && password='$password'");
        $hasil = mysqli_fetch_array($query);
        if($hasil){
            $_SESSION['user'] = $username;
            header('location:../dashboard');
        }else{ ?>
            <script>
                alert('username atau passwordnya salah bos!!');
                window.location= '../login'
            </script>
<?php
        }
    }
?>