<!DOCTYPE html>
            <html lang="en">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login Page</title>
            
            
            
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #ffffff;
                        margin: 0;
                        padding: 0;
                    }
            
                    .container {
                        width: 360px;
                        margin: 50px auto;
                        background-color: #ffffff;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 0 10px hsl(120, 4%, 60%);
                    }
            
                    h1 {
                        font-family: Georgia, 'Times New Roman', Times, serif;
                        margin-top: 20px;
                        color: #333;
                        text-align: center;
                    }
            
                    form {
                        margin-top: 30px;
                    }
            
                    input[type="text"],
                    input[type="password"],
                    input[type="submit"] {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        box-sizing: border-box;
                    }
            
                    input[type="submit"] {
                        background-color: #007bff;
                        color: white;
                        cursor: pointer;
                    }
            
                    .logo-text {
                        font-family: 'Arial', sans-serif;
                        font-size: 20px;
                        margin-left: 10px;
                    }
                </style>
            </head>
            
            <body>
            
                <div class="container">
                    <h1>Login Page</h1>
            
                    <form id="loginForm">
                        <input type="text" id="username" placeholder="Username : admin" required><br>
                        <input type="password" id="password" placeholder="Password : 123" required><br>
                        <input type="submit" value="Login">
                    </form>
                </div>
            
 <?php               
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tbkaryawan WHERE Nama = '$username' AND idKaryawan = '$password'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil, tetapkan variabel sesi
        $_SESSION['loggedin'] = true;
        // Alihkan ke halaman index
        header("Location: index.html");
        exit;
    } else {
        $error_message = "Username atau password salah.";
    }
}

                ?>
            </body>
            
            </html>