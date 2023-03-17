<?php
session_start();
$_SESSION['name_user'] = $_POST['name_user'];
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
