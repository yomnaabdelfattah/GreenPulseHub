<?php

if(isset($_SESSION['user_id'])){

}else{
    header('location:/grad.proj/account/login.php');
}

?>