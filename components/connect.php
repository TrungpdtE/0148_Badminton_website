<?php
$servername = "localhost";
$database = "db";
$username = "root";
$password = ""; // Mật khẩu đã được băm

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}