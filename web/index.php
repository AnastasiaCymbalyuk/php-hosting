<?php
session_start();
if (isset($_SESSION['name_user'])) {
    echo 'Добро пожаловать, ' . $_SESSION['name_user'] . '<br/>';
    echo '<a href ="./exit.php">ссылка на файл exit</a><br/>';
} else {
    include 'index.html';
}
