<?php
session_start();

if (isset($_SESSION['email'])) {
    header('Location: admin.php');
}

if (isset($_POST['login'])) {
    define('EMAIL', 'admin@gmail.com');
    define('PASSWORD', '123456');
 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == EMAIL) {
        if ($password == PASSWORD) {
            $_SESSION['email'] = $email;
            header("Location: admin.php"); // It sends a raw HTTP to a client 
        } else {
            echo "Password doesn't match :(";
        }
    } else {
        echo "Email not match :(";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="login-box">
        <form action="" method="POST">
            <input type="text" placeholder="Email Address" name="email" required="">
            <input type="password" placeholder="Password" name="password" required="">
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>

</html>