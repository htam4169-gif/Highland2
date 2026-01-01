<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT');

$conn = mysqli_init();
// TiDB Cloud yêu cầu SSL để kết nối an toàn
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL); 
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port)) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>