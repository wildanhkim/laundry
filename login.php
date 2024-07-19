<?php 
    session_start();
    if(!empty($_SESSION['user'])) {
        header('location:dashboard');
    }
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barakah laundry - Aplikasi manajemen kasir laundry</title>

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 350px;
            background-color: #fff;
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
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
            text-align: center;
        }
    </style>
</head>

<body>

<div class="container">
        <h1>Login Page</h1>

        <form id="loginForm" action="proses/proses_login.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username : admin" required>
            <input type="password" id="password" name="password" placeholder="Password : 123" required><br>
            <input type="checkbox" id="rememberMe" name="rememberMe">
            <label for="rememberme">Remember me</label><br><br>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>

</body>

</html>