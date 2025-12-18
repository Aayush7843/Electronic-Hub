<?php
include '../components/connect.php';

$stmt = $conn->query("SELECT id, name, password FROM admins");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($data);
