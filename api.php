<?php
include 'db.php';
header('Content-Type: application/json');

$stmt = $conn->query("SELECT 1 AS ok");
echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
