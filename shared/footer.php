<header>
    <style>
        /* footer  */
        .container1 {
            max-width: 1170px;
            margin: auto;
        }
        ul {
            list-style: none;
        }
        .footer {
            background-color: #436850;
            padding: 70px 0;
        }
        .row1 {
            display: flex;
            flex-wrap: wrap;
        }
        .footer-col {
            width: 25%;
            padding: 0 15px;
        }
        .footer-col h4 {
            font-size: 20px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #F5EFE6;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }
        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #F5EFE6;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 10px;
        }
        /* Footer responsive  */
        @media (max-width: 800px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }
        @media (max-width: 600px) {
            .footer-col {
                width: 100%;
            }
        }
        .menu-icon {
            width: 28px;
            margin-left: 20px;
            display: none;
        }
    </style>
</header>
<br> <br>
<!-- footer -->
<footer class="footer" style="color: antiquewhite;">
    <div class="container1">
        <div class="row1">
            <div class="footer-col">
                <h4>GreenPulseHub</h4>
                <ul>
                    <li><a href="/grad.proj/aboutUs/aboutUs.php">About Us</a></li>
                    <li><a href="/grad.proj/questions/question.php">FAQ</a></li>
                    <li><a href="/grad.proj/blogs/allBlogs.php">Blogs</a></li>
                    <li><a href="/grad.proj/videos/videos.php">Videos</a></li>
                    <li><a href="/grad.proj/events/allEvents.php">Events</a></li>
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
                        <?php
                if(isset($_SESSION['user_id'])){ 
             ?> 
                        <li><a href="/grad.proj/subscription/subscribePage.php">Subscribe</a></li>
                        <?php } ?>


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
        <div class="foot">
            <p class="fir">&copy; GPH 2024 Privacy Policy</p>
            <p class="sec">Website MadeBy(Y,G,D,M^3)</p>
        </div>
    </div>
</footer>

    </body>
    </html>