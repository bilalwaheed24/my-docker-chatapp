<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));
$username = $conn->real_escape_string($data->username);
$conn->query("INSERT IGNORE INTO users (username) VALUES ('$username')");
echo "Signed up";
?>
