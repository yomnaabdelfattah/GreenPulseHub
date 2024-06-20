<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';

$select="SELECT review.content, CONCAT(user.fname, ' ', user.lname) AS full_name 
FROM review
INNER JOIN user ON review.userId = user.user_id";

$query= mysqli_query($conn,$select);


?>

<head>
  <style>
    /* Center the content */
    .center-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    /* Style for the review box */
    .review-box {
      max-width: 500px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
   


<!-- show reviews in a card -->
  <div class="center-box">
    <div class="review-box">
    <?php
        foreach($query as $data){ ?>
      <h3><?php echo $data['full_name'];?></h3>
      <div class="review">
        <p><?php echo $data['content'];?></p>
      </div>
      <hr> 

      <?php } ?>
      
    </div>
  </div>
</body>
</html>
<?php
include '../shared/footer.php';

?>
