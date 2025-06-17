<?php
header('Content-Type: application/json');
include 'db.php';

$stmt = $conn->query("SELECT * FROM users"); // غير اسم الجدول حسب جدولك
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
?>
