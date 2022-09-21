<?php
$email = 'test@gmail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL))
echo "Yes";
else
echo "No";
?>