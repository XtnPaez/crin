<?php
require_once '../config/config.php';
require_once '../includes/header.php';

$page = $_GET['page'] ?? 'home';
$file = "../views/{$page}.php";

if (file_exists($file)) {
    include $file;
} else {
    include "../views/404.php";
}

require_once '../includes/footer.php';
