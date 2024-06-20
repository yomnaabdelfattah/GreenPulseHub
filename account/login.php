<?php
 ob_start();

include '../shared/nav.php';
include '../shared/config.php';


if (isset($_POST['send'])) {
    $pass = $_POST['pass'];
    $email = $_POST['email'];
$selectAdmin = "SELECT * FROM `admin`WHERE `email`='$email' AND `pass`='$pass' ";
$s = mysqli_query( $conn , $selectAdmin );
$numrows = mysqli_num_rows($s);
$m= mysqli_fetch_assoc($s);
if ($numrows > 0){

    $admin_id=$m['admin_id'];
    $_SESSION['admin_id']=$admin_id;
      header('location:/grad.proj/admin/panel.php');
    } else {
    
        $selectUser= "SELECT * FROM `user`WHERE `email`='$email' AND `pass`='$pass' ";
        $qq = mysqli_query($conn, $selectUser);
        $ew = mysqli_num_rows($qq);
        $ss=mysqli_fetch_array($qq);
        if ($ew > 0) {
        $user_id=$ss['user_id'];
        $_SESSION['user_id']=$user_id;
          header('location:/grad.proj/index.php');
        } else {?>
          <div class="alert alert-danger" role="alert">
        <?php  echo "Wrong Email or Password";?>
        
      </div>
      <?php 
        }
    }
  }
  
?>



<body>
    

    <!-- account page  -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2" >
                    <img src="../images/greenpulsehouse.png" >
                </div>
                <div class="col-2">
                    <div class="form-container" style="height: 400px;">
                        <div class="form-btn">
                            <span >Log In</span>
                            <hr id="indicator">
                        </div>

                       
                        <form method="POST" id="LoginForm">
                            <label for="">E-mail</label>
                            <input type="email" placeholder="Email" name="email" required>
                            <label for="">Password</label>
                            <input type="password" placeholder="Password" name="pass" required>
                            <p>Don't have an account!<a href="../account/signup.php" style="text-decoration: underline; font-size: 15px;">Sign Up</a></p>
                            <button type="submit" class="btn" name="send">Log In</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- js for toggle menu  -->
<script>
    var Menuitems = document.getElementById("Menuitems");
    Menuitems.style.maxHeight = "0px";
    function menutoggle(){
        if ( Menuitems.style.maxHeight == "0px")
        {
            Menuitems.style.maxHeight = "200px"
        }
        else
        {
            Menuitems.style.maxHeight = "0px"
        }
    }
</script>

        
    </body>
</html>

<?php
include '../shared/footer.php';

?>