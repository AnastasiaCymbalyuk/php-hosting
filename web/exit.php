<?php
session_start();
unset($_SESSION['name_user']);
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();