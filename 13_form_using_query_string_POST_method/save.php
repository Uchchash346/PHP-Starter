<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'user';
$email = isset($_GET['email']) ? $_GET['email'] : 'user@email.com';
?>
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