<?php

if(isset($_SESSION['admin_id'])){

}else{
    header('location:/grad.proj/account/login.php');
}

?>