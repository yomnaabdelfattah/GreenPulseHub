 <?php
 ob_start();
 include '../shared/config.php';
 

$sql = "SELECT * FROM questions ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card mb-2'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . htmlspecialchars($row['user_name']) . "</h5>";
        echo "<p class='card-text'>" . htmlspecialchars($row['content']) . "</p>";

        // Load replies
        $post_id = $row['id'];
        $reply_sql = "SELECT * FROM qreplies WHERE post_id = '$post_id' ORDER BY id DESC";
        $reply_result = $conn->query($reply_sql);

        if ($reply_result->num_rows > 0) {
            while($reply_row = $reply_result->fetch_assoc()) {
                echo "<div class='card mt-2'>";
                echo "<div class='card-body'>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>" . htmlspecialchars($reply_row['user_name']) . "</h6>";
                echo "<p class='card-text'>" . htmlspecialchars($reply_row['content']) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }

        // Reply form
        echo "<form class='replyForm' data-post-id='" . $row['id'] . "'>";
        echo "<div class='form-group'>";
        echo "<input type='text' class='form-control' placeholder='Your name' required>";
        echo "<textarea class='form-control' rows='2' placeholder='Write your reply here...' required></textarea>";
        echo "</div>";
        echo "<button type='submit' class='btn btn-secondary'>Reply</button>";
        echo "</form>";

        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No posts available.";
}

$conn->close();
?>
