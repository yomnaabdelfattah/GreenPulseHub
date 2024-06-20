<?php
ob_start();
include '../shared/config.php';

$post_id = intval($_POST['post_id']);
$user_name = $conn->real_escape_string($_POST['user_name']);
$content = $conn->real_escape_string($_POST['content']);

$sql = "INSERT INTO qreplies (post_id, user_name, content) VALUES ('$post_id', '$user_name', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "New reply created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
