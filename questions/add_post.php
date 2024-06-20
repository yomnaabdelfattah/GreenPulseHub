<?php
ob_start();
include '../shared/config.php';


$user_name = $conn->real_escape_string($_POST['user_name']);
$content = $conn->real_escape_string($_POST['content']);

$sql = "INSERT INTO questions (user_name, content) VALUES ('$user_name', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "New post created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
