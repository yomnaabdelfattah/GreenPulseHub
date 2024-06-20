<?php
session_start();
ob_start();
include '../shared/config.php';

//echo '<pre>';print_r($_SESSION); echo '</pre>';

if(isset($_GET['logOut'])){
    session_unset();
    session_destroy();
    header('location:/grad.proj/index.php');
  }
  
  if (isset($_GET["search"])) {
    $searched = addSlashes($_GET["searched"]);
    header("location:/grad.proj/shared/search.php?searched=" . $searched);
    
}


?>

<!DOCTYPE HTML>
<html>

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GreenPulseHub</title>
    <link rel="icon" href="/grad.proj/images/greenpulsehouse.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../css/account.css">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar{
    
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
   
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li {
    display: inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: #0e6800;
}
#Menuitems{
    background-color: #0e68005e;
}

  .dropdown-item {
    transition: transform .1s;
    color:#0e6800 ;
}

/* Style the dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
    cursor: pointer;
   
    background-color: transparent;
   
    color: #0e6800;
border: none;
  
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F6F5F2;
  min-width: 160px;
 
  z-index: 1;
}

.dropdown-content a {
    color: #0e6800;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #FFEFE8;}

.dropdown:hover .dropdown-content {display: block;}


.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
 flex-basis: 50%;
 min-width: 300px;   
}
.col-2 img{
max-width: 100%;
padding: 50px 0;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
.btn{
    display: inline-block;
    background-color: #436850;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
}
.btn:hover{
    color: white;
    background-color: #000;
}
.header{
    background:radial-gradient(#fff,#f1f7f0);
    
}
.header row{
    margin-top:70px;
    
}
a:hover{
padding: 1rem;
color: #436850;


}





  /* media query for menu  */
  @media only screen and (max-width:800px){
    nav ul {
        position: absolute;
        top: 70px;
        left: 0;
        background: #333;
        width: 100%;
        overflow: scroll;
        transition: max-height 0.5s ;
    }
    nav ul li {
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a {
        color: #fff;
    }
    .menu-icon {
        display: block;
        cursor: pointer;
    }
  }
  @media only screen and (max-width:600px){
    .row{
        text-align: center;
    }
    .col-2,.col-3,.col-4{
        flex-basis: 100%;
    }
  }




    </style>
   </head>

   <body>
    <div class="header">
    <div class="container">
    <div class="navbar">
    <div> 
        <a class="navbar-brand" href="../index.php">
            <img src="/grad.proj/images/greenpulsehouse.png" alt="" width="120px" height="auto">
        </a>
    </div>
 
    <nav >
       

     <ul id="Menuitems">

<!-- search -->
            <li>
                <form class="d-flex">
                    <input class="form-control ml-2" type="search" name="searched" placeholder="Search" aria-label="Search" required>
                    <button class="btn ml-2" 
                    name="search" style="border-color:white ; color: white;" type="submit">Search</button>
                  </form>
            </li>

   



<!-- dropdown list -->
<li>
    <div class="dropdown">
        <button class="dropbtn">Our Products</button>
        <div class="dropdown-content">
            <?php
            $select = "SELECT * FROM `categories`";
            $query = mysqli_query($conn, $select);
            foreach ($query as $data) {
            ?>
                <a class="dropdown-item" href="/grad.proj/categories/category.php?type=<?php echo $data['category_id'] ?>"><?php echo $data['name'] ?></a>
            <?php } ?>
        </div>
    </div>
</li>

                <li><a href="/grad.proj/blogs/allBlogs.php">Blogs</a></li>
                <li><a href="/grad.proj/videos/videos.php">Videos</a></li>
                <li><a href="/grad.proj/events/allEvents.php">Events</a></li>
                <?php if(isset($_SESSION['admin_id']) || isset($_SESSION['user_id'])): ?>
            <li><a href="?logOut=true" class="btn">Log Out</a></li>
        <?php else: ?>
            <li><a href="../account/login.php">Log In</a></li>
        <?php endif; ?>
        </ul>
    </nav>

   <a href="/grad.proj/cart/cart.php">  <img src="/grad.proj/images/cart.png" width="30px" height="30px"> </a>
   
    <img src="/grad.proj/images/menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px" >
    
    </div>

   
<?php
include 'script.php';
?>

