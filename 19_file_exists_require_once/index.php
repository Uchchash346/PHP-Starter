<?php
if (isset($_GET['page'])) {
    $page =  $_GET['page'] . '.php';
} else {
    $page = "home.php";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About Us</a></li>
            <li><a href="index.php?page=services">Services</a></li>
            <li><a href="index.php?page=portfolio">Portfolio</a></li>
            <li><a href="index.php?page=contact">Contact Us</a></li>
        </ul>
    </nav>
    <section>
        <?php
        if (file_exists($page)) {
            require_once $page;
        } else{
            echo "<h1>File Not Found!</h1>";
        }
        ?>
        <footer>
            <p>Footer Area</p>
        </footer>
</body>

</html>