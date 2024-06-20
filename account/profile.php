<?php
ob_Start();

include '../shared/nav.php';
include '../shared/config.php';
include '../auth/user.php';


if(isset($_SESSION['user_id'])){
  $user_id = $_SESSION['user_id'];
  $select="SELECT * FROM `user` where user_id=$user_id";
  $query= mysqli_query($conn,$select);
  $user = mysqli_fetch_assoc($query);
  
}

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
}

.profile {
  max-width: 600px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  display: block;
  margin: 0 auto 20px;
}

.profile h3 {
  text-align: center;
}

.profile p {
  margin-bottom: 10px;
}

.profile p:last-child {
  margin-bottom: 0;
}

  </style>
</head>
<body>

  <div class="profile">
  <?php
        foreach($query as $data){ ?>
    <h3><?php echo $data['fname'];?><span> </span><?php echo $data['lname'];?></h3>
    <p>E-mail: <?php echo $data['email'];?></p>
    <p>Password: <?php echo $data['pass'];?></p>
    <p>Phone Number: <?php echo $data['phone'];?></p>
    <p>Address: <?php echo $data['address'];?></p>
    <?php } ?>
    <a href="/grad.proj/account/signup.php?edit=<?php echo $data['user_id'] ;?>" class="btn btn">Update</a> 

  </div>
  <a href="/grad.proj/cart/myOrders.php" class="btn" style="margin-left: 550px;">My Orders</a>
</body>
</html>

<?php
include '../shared/script.php';

include '../shared/footer.php';


?>

