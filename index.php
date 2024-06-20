<?php 
session_start();
include './shared/config.php'; 

if(isset($_GET['logOut'])){
    session_unset();
    session_destroy();
    header('location:/grad.proj/index.php');
  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>GreenPulseHub</title>
    <link rel="icon" href="/grad.proj/images/greenpulsehouse.png">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="./images/greenpulsehouse.png" alt="" width="125px"></a>
                </div>
                <nav>
                    <ul id="Menuitems">
                        <li>
                            <form class="d-flex">
                                <input class="form-control ml-2" type="search" name="searched" placeholder="Search" aria-label="Search" required>
                                <button class="btn ml-2" name="search" style="border-color:white; color: white;" type="submit">Search</button>
                            </form>
                        </li>
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
            <li><a href="/grad.proj/account/login.php">Log In</a></li>
        <?php endif; ?>
                    </ul>
                </nav>
                <a href="/grad.proj/cart/cart.php?user_id">  <img src="/grad.proj/images/cart.png" width="30px" height="30px"> </a>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>To Save Our<br>Home Planet!</h1>
                    <a href="#categories" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./images/greenpulsehouse.png">
                </div>
            </div>
        </div>
    </div>
    
    <div class="categories" id="categories">
        <div class="small-container">
            <h2 class="title">Featured Categories</h2>
            <div class="row">
                <div class="col-6">
                    <a href="/grad.proj/categories/category.php?type=1"><img src="/grad.proj/images/furniture.jpg" height="289.438px"></a>
                </div>
                <div class="col-6">
                    <a href="/grad.proj/categories/category.php?type=2"><img src="/grad.proj/images/beauty.jpg" height="289.438px"></a>
                </div>
                <div class="col-6">
                    <a href="/grad.proj/categories/category.php?type=3"><img src="/grad.proj/images/clothes.jpg" height="289.438px"></a>
                </div>
                <div class="col-6">
                    <a href="/grad.proj/categories/category.php?type=4"><img src="/grad.proj/images/kitchen.jpg" height="289.438px"></a>
                </div>
                <div class="col-6">
                    <a href="/grad.proj/categories/category.php?type=5"><img src="/grad.proj/images/hygiene.jpg" height="289.438px"></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="small-container">
        <div class="few">
            <h2 class="title" id="blogs">Blogs</h2>
            <div class="overflow">
                <div class="grid-container k"> 
                    <div class="grid-item hover04 kk">
                        <figure><img class="l" src="/grad.proj/admin/upload/bloooog.jpg" alt="">
                        <p class="time"> 5 minutes </p>
                        <p  class="disc">Cultivating a Sustainable Future:<br> Practical Steps for Everyday Change</p>
                    </div>
                    <div class="grid-item hover04 kk">
                        <figure><img class="ll" src="/grad.proj/admin/upload/bblog.jpg" alt="">
                        <p class="time">  6 minutes </p>
                        <p  class="disc">Dressing for the Future: <br>Embracing Sustainable Fashion </p>
                    </div> 
                    <div class="grid-item hover04 kk">
                        <figure><img class="l" src="/grad.proj/admin/upload/blog3.jpg" alt="">
                        <p class="time"> 8 minutes </p>
                        <p  class="disc">Nourishing the Planet:<br> Embracing Sustainable Food Practices </p>
                    </div> 
                    <div class="grid-item hover04 kk">
                        <figure><img class="ll" src="/grad.proj/admin/upload/blog4.jpg" alt="">
                        <p class="time"> 6 minutes </p>
                        <p  class="disc">Powering the Future:<br> Exploring Sustainable Energy Solutions </p>
                    </div> 
                </div>
            </div>
            <br>
            <h4 style="text-align: center; margin: 0 auto 80px; position: relative;">
                <a href="/grad.proj/blogs/allBlogs.php" class="small-link">Explore more!</a>
            </h4>
        </div>
    </div>
    
    <div class="container">
    <h2 class="title" id="videos">Videos</h2>
    
    <div style="text-align: center;">
        <iframe src="https://www.youtube.com/embed/zx04Kl8y4dE" width="800px;" height="500px;"></iframe>
    </div>
    
    <div style="text-align: center; margin-top: 20px;">
        <h4 style="margin-bottom: 0;">
            <a href="/grad.proj/videos/videos.php" class="small-link">Explore more!</a>
        </h4>
    </div>
</div>

    
    <div class="small-container" style="margin-bottom: 20px;">
        <h2 class="title" id="events">Events</h2>
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="/grad.proj/admin/upload/event1.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                        <h1>Sustainability LIVE Malta-2024</h1>
                        <small>A leading ESG and sustainability strategy event in Malta Gather among C/V/D level sustainability executives at Sustainability LIVE Malta to forge connections and delve deeper into the most pressing sustainability issues facing organisations today.</small>
                        <br>
                        <a href="/grad.proj/events/allEvents.php" class="btn">Explore More Events &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <footer class="footer" style="color: antiquewhite;">
        <div class="container1">
            <div class="row1">
                <div class="footer-col">
                    <h4>GreenPulseHub</h4>
                    <ul>
                        <li><a href="/grad.proj/aboutUs/aboutUs.php">About Us</a></li>
                        <li><a href="/grad.proj/questions/question.php">FAQ</a></li>
                        <li><a href="#blogs">Blogs</a></li>
                        <li><a href="#videos">Videos</a></li>
                        <li><a href="#events">Events</a></li>
                        <?php
                if(isset($_SESSION['user_id'])){ 
             ?> 
                        <li><a href="/grad.proj/account/profile.php?user_id">My Profile</a></li>
                        <?php } ?>


                        <?php
                if(isset($_SESSION['admin_id'])){ 
             ?> 
                    <li><a href="/grad.proj/admin/panel.php">Admin Panel</a></li>
            <?php } ?>
                
              </ul>
                </div>
                <div class="footer-col">
                    <h4>What we offer!</h4>
                    <ul>
                        <li><a href="/grad.proj/categories/category.php?type=1">Furniture</a></li>
                        <li><a href="/grad.proj/categories/category.php?type=2">Beauty & Care</a></li>
                        <li><a href="/grad.proj/categories/category.php?type=3">Clothes</a></li>
                        <li><a href="/grad.proj/categories/category.php?type=4">Home & Kitchen</a></li>
                        <li><a href="/grad.proj/categories/category.php?type=5">Hygiene</a></li>
                       
                        <?php if (isset($_SESSION['user_id'])) { ?>
                        <li><a href="/grad.proj/subscription/subscribePage.php">Subscribe</a></li>
                        <?php } ?>         

                        <li><a href="/grad.proj/bot/chatbot.php">Chatting Bot</a></li>

                   
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="mailto:GreenPulseHub@gmail.com">GreenPulseHub@gmail.com</a></li>
                        <li><a class="linkfooter">01589477271</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot" style="color: antiquewhite;">
            <p>&copy; GPH 2024 Privacy Policy</p>
            <p >Website MadeBy(Y,G,D,M^3)</p>
        </div>
    </footer>

    <script>
        var Menuitems = document.getElementById("Menuitems");
        Menuitems.style.maxHeight = "0px";
        function menutoggle(){
            if ( Menuitems.style.maxHeight == "0px") {
                Menuitems.style.maxHeight = "200px"
            } else {
                Menuitems.style.maxHeight = "0px"
            }
        }
    </script>
</body>
</html>
