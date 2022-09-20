<?php
session_start();
$_SESSION['name'] = "Something";
$_SESSION['age'] = "23";
print_r($_SESSION);

?> 