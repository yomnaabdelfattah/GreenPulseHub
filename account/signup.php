<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';



$fname = $lname = $address = $email =$pass =$conpass =$phone= '';
$update = false;

if (isset($_GET['edit'])) {
    $update = true;
    $user_id = $_GET['edit'];
    $select = "SELECT * FROM `user` WHERE user_id=$user_id";
    $s = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($s);
    $fname =  $row['fname']; 
    $lname =  $row['lname'];
    $pass = $row['pass']; 
    $conpass = $row['conpass'];
    $address = $row['address'];
    $email = $row['email'];
    $phone = $row['phone'];
}

if (isset($_POST['update'])) {
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

   
// Validate password match
if ($pass !== $conpass) {
    echo 'Password and Confirm Password must match!';
} else {
    // Update user
    $update = "UPDATE `user` SET fname='$fname', lname='$lname', pass='$pass', conpass='$conpass', address='$address', email='$email', phone='$phone' WHERE user_id=$user_id";
    $i = mysqli_query($conn, $update);

    if ($i) {
        header("location: /grad.proj/account/profile.php");
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
}


if (isset($_POST['send'])) {
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

  //Check if email is registered before
  $checkEmail = "SELECT * FROM `user` where email = '$email' ";
  $emailQuery = mysqli_query($conn, $checkEmail);
  
  $emailRows  = mysqli_num_rows($emailQuery);
  if($emailRows > 0){
    echo 'User Already Exists!' ;}
    else {
        if ($pass !== $conpass ) {
            echo 'Password and Cofirm Password must match together!';
    } else {

    $insert = "INSERT INTO `user` VALUES (NULL , '$fname' , '$lname','$email' ,'$pass' , '$conpass' , '$phone' , '$address', 0)";
    $i = mysqli_query($conn, $insert);
        header('location:/grad.proj/index.php');
    
  } } }
  ?>

    <!-- account page  -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2" >
                    <img src="../images/greenpulsehouse.png" >
                </div>
                <div class="col-2">
                    <div class="form-container" style="height: 800px;">
                        <div class="form-btn">
                            <span ><?php echo $update ? 'Edit Profile' : 'Sign Up'; ?></span>
                            <hr id="indicator">
                        </div>


                        <form method="POST" id="RegForm">
                            <label  for="" >First Name</label>
                            <input type="text" placeholder="First Name" name="fname" required value="<?php echo $fname ?>">
                            <label for="">Last Name</label>
                            <input type="text" placeholder="Last Name" name="lname" required value="<?php echo $lname ?>">
                            <label for="">E-mail</label>
                            <input type="email" placeholder="Email" name="email" required value="<?php echo $email ?>">
                            <label for="">Password</label>
                            <input type="password" placeholder="Password" name="pass" required value="<?php echo $pass ?>">
                            <label for="">Confirm Password</label>
                            <input type="password" placeholder="Confirm Password" name="conpass" required value="<?php echo $conpass ?>">
                            <label for="">Phone</label>
                            <input type="number" placeholder="Phone" name="phone" required value="<?php echo $phone ?>">
                           <label for="">Address</label>
                            <input type="text" placeholder="Address" name="address" required value="<?php echo $address ?>">
                            
                            <?php if (!$update) { ?>
                <p>Already have an account?<a href="../account/login.php" style="text-decoration: underline; font-size: 15px;">Log In</a></p>
              <?php } ?>
                            <button type="submit" class="btn" name="<?php echo $update ? 'update' : 'Sign Up'; ?>"><?php echo $update ? 'Update' : 'Sign Up'; ?></button>
                            </form>



                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

include '../shared/footer.php';

?>

