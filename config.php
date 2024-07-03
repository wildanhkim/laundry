<?php
/**
 * using  mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'laundry';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($mysqli) {
    // Koneksi berhasil
    echo "";
} else {
    // Koneksi gagal
    echo "Koneksi gagal: " . mysqli_connect_error();
    exit;
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === 'admin' && $password === '123') {
        header("Location: contoh.php");
        exit;}

    $sql = "SELECT * FROM tbkaryawan WHERE Nama = '$username' AND idKaryawan = '$password'";
    $result = $mysqli->query($sql);

    if ($result) {
        // Query berhasil dijalankan
        if ($result->num_rows > 0) {
            // Login berhasil, arahkan ke halaman utama
            header("Location: index.html");
            exit;
        } else {
            $error_message = "Username atau password salah.";
        }
    } else {
        // Query gagal
        echo "Error: " . mysqli_error($mysqli);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Kasir Laundry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <?php if (isset($error_message)) { ?>
                            <div class="alert alert-danger"><?php echo $error_message; ?></div>
                        <?php } ?>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>