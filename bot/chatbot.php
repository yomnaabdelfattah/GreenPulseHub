
<?php
include '../shared/config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_message = $_POST['message'];

   

    // Retrieve bot response from database
    $stmt = $conn->prepare("SELECT bot_response FROM botresponses WHERE user_input = ?");
    $stmt->bind_param("s", $user_message);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $bot_response = $row['bot_response'];
    } else {
        $bot_response = "I'm sorry, I don't understand that.";
    }

    

    echo $bot_response;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GreenPulseHub</title>
    <link rel="icon" href="../images/greenpulsehouse.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="/grad.proj/css/account.css">

    <style>
       
        .chat-box {
            max-height: 400px;
            overflow-y: auto;
        }
        .chat-box .message {
            margin-bottom: 10px;
        }
        .chat-box .message.user {
            text-align: right;
        }
        .chat-box .message.bot {
            text-align: left;
        }
        .message.user {
    text-align: right;
}

.message.bot {
    text-align: left;
}
    </style>
    
</head>
<body>





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="chat-box border p-3">
                    <!-- Messages will be appended here dynamically -->
                </div>
                <form id="chat-form">
                    <div class="input-group mt-3">
                        <input type="text" id="message" class="form-control" placeholder="Type a message..." required>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
   $(document).ready(function() {
    $('#chat-form').on('submit', function(event) {
        event.preventDefault();
        var message = $('#message').val().trim(); // Trim to remove leading/trailing whitespace

        if (message === '') {
            return; // Do nothing if message is empty
        }

        // Hide input box and send button after first message sent
        $('#message').prop('disabled', true); // Disable input field
        $('#chat-form button[type="submit"]').prop('disabled', true).addClass('disabled'); // Disable and visually indicate button disabled

        // Clear previous messages in chat box
        $('.chat-box').empty();

        // Append user message
        $('.chat-box').append('<div class="message user">' + message + '</div>');

        // Send AJAX request to chatbot.php
        $.ajax({
            url: 'chatbot.php',
            method: 'POST',
            data: { message: message },
            success: function(response) {
                // Append bot response
                $('.chat-box').append('<div class="message bot">' + response + '</div>');
                $('.chat-box').scrollTop($('.chat-box')[0].scrollHeight); // Scroll to bottom
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                // Optionally handle errors here
            }
        });
    });
});


    </script>
</body>
</html>

