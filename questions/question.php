<?php ob_start();
include '../shared/nav.php';
include '../shared/config.php';
 ?>

    <style>
        #posts {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="my-4">FAQ</h1>
    <form id="postForm">
        <div class="form-group">
            <input type="text" class="form-control" id="postUserName" placeholder="Your name" required>
            <textarea class="form-control" id="postContent" rows="3" placeholder="Write your question here..." required></textarea>
        </div>
        <button type="submit" class="btn btn" >Submit</button>
    </form>
    <hr>
    <h2>Asked Questions</h2>
    <div id="posts" class="mt-4"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        // Function to load posts
        function loadPosts() {
            $.ajax({
                url: 'load_posts.php',
                method: 'GET',
                success: function(data) {
                    $('#posts').html(data);
                }
            });
        }

        // Load posts when the page loads
        loadPosts();

        // Form submission event for new posts
        $('#postForm').on('submit', function(e) {
            e.preventDefault();
            var user_name = $('#postUserName').val();
            var content = $('#postContent').val();
            $.ajax({
                url: 'add_post.php',
                method: 'POST',
                data: { user_name: user_name, content: content },
                success: function(response) {
                    $('#postUserName').val('');
                    $('#postContent').val('');
                    loadPosts();
                }
            });
        });

        // Delegate form submission event for replies
        $(document).on('submit', '.replyForm', function(e) {
            e.preventDefault();
            var form = $(this);
            var post_id = form.data('post-id');
            var user_name = form.find('input[type="text"]').val();
            var content = form.find('textarea').val();
            $.ajax({
                url: 'add_reply.php',
                method: 'POST',
                data: { post_id: post_id, user_name: user_name, content: content },
                success: function(response) {
                    loadPosts();
                }
            });
        });
    });
</script>

<?php
include '../shared/footer.php'; 
?>

