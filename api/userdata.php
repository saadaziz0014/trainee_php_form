<?php

$password = $_POST["pass"];
$password = hash('sha256', $password);
echo $password;
header("refresh:5;url=../file.html");
?>