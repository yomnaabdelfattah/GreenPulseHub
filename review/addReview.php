<?php 
ob_start();
include '../shared/nav.php';
include '../shared/config.php';

if (isset($_POST['send'])) {

      // getting customer [ id ] =>> to make feedback with his [ id ]
  $user_email = $_SESSION['email'];
  $select = "SELECT * FROM `user` WHERE email = '$user_email' ";
  $s = mysqli_query( $conn , $select );
  $row = mysqli_fetch_assoc($s);
  $user_id = $row['user_id'];
  

    $content =  $_POST['content'];
    $insert = "INSERT INTO `review` VALUES (NULL , '$content', Null )";
    $i = mysqli_query($conn, $insert);
        header('location:/grad.proj/review/reviews.php');
}

?>

<div class="col-4" style=" margin: 0 auto; width: fit-content; ">
    <h1 style="text-align: center; color:#0e6800;">Add Your Review!</h1>
<form method="POST">
        <textarea placeholder="Your Review" name="content" required style="height: 150px; width:385px"></textarea>
                            
        <button type="submit" class="btn" name="send">Add</button>
</form>

</div>

<?php include '../shared/script.php' ;
include '../shared/footer.php';

?>