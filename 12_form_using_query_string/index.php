<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'user';
$email = isset($_GET['email']) ? $_GET['email'] : 'user@email.com';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="submit" name="submit" value="Submit">
    </form>
    <table>
        <tr>
            <td>Name</td>
            <td>: <?= $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $email; ?></td>
        </tr>
    </table>
</body>

</html>