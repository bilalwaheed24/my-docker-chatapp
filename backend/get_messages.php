<?php
include 'db.php';
$result = $conn->query("SELECT sender, receiver, message FROM messages ORDER BY id DESC LIMIT 50");
$messages = array();
while($row = $result->fetch_assoc()) {
  $messages[] = $row;
}
echo json_encode(array_reverse($messages));
?>
