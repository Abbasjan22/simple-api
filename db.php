<?php
$host = "crossover-proxy.rlwy.net";
$port = "22994";
$dbname = "railway";
$username = "root";
$password = "QIOZKwbyWLSBRAHFHDAtjxTDxaDTPktM"; // ← كلمة السر من الصورة

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connected successfully";
} catch (PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}
?>
