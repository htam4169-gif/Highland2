<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT');

$conn = mysqli_init();

// Đây là dòng quan trọng nhất để sửa lỗi "Insecure transport"
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>