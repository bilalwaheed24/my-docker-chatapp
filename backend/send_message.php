<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));
$sender = $conn->real_escape_string($data->sender);
$receiver = $conn->real_escape_string($data->receiver);
$message = $conn->real_escape_string($data->message);
$conn->query("INSERT INTO messages (sender, receiver, message) VALUES ('$sender', '$receiver', '$message')");
echo "Message sent";
?>
