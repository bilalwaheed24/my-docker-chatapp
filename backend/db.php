<?php
$host = 'mysql';
$db = 'chatdb';
$user = 'chatuser';
$pass = 'chatpass';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
