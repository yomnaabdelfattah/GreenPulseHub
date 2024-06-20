
<?php
 include '../shared/nav.php';
 include '../shared/config.php';
 include '../auth/admin.php';

  
 
?>
<html>

<head>
    <!-- CSS only -->
    
        <style>
        a {
            color: #000;
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-around mt-5 text-center">

        <div class="flex-shrink-0 p-3 bg-white ml-5 pl-5" style="width: 25%;">
            <p class=" text-secondary d-flex align-items-center pb-3 mb-3 ml-3 color-black text-decoration-none border-bottom display-3 " >GreenPulseHub</p>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-success rounded collapsed" data-bs-toggle="collapse" data-bs-target="#news-collapse">
                        Blogs
                    </button>
                    <div class="collapse mt-2" id="news-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/grad.proj/admin/addBlog.php" class="link-dark rounded">Add Blogs</a></li>
                            <li><a href="/grad.proj/admin/listBlog.php" class="link-dark rounded">View Blogs</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-block btn-outline-success align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#instructors-collapse" aria-expanded="false">
                        Products
                    </button>
                    <div class="collapse mt-2" id="instructors-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/grad.proj/admin/addProduct.php" class="link-dark rounded">Add Products</a></li>
                            <li><a href="/grad.proj/admin/listProduct.php" class="link-dark rounded">View Products</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <a href="/grad.proj/admin/listUser.php" class="btn btn-block btn-outline-success align-items-center rounded collapsed">
                        List Customers</a>
                </li>

                    <div class="collapse mt-2" id="students-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                            <li><a href="/grad.proj/admin/listUser.php" class=" link-dark rounded">View Customers</a></li>
                        </ul>
                    </div>
                   
                <li class="mb-1">
                    <button class="btn btn-block btn-outline-success align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#courses-collapse" aria-expanded="false">
                        Events
                    </button>
                    <div class="collapse mt-2" id="courses-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/grad.proj/admin/addEvent.php" class="link-dark rounded"> Add Events </a></li>
                            <li><a href="/grad.proj/admin/listEvent.php" class="link-dark rounded">View Events</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <a href="/grad.proj/admin/listOrders.php" class="btn btn-block btn-outline-success align-items-center rounded collapsed">
                        List Orders</a>

                </li>
                <li class="mb-1">
                    <a href="/grad.proj/admin/listReviews.php" class="btn btn-block btn-outline-success align-items-center rounded collapsed">
                        List Reviews</a>
                </li>
              
                
        </div>
        <div class="mt-5">
            <img src="../images/greenpulsehouse.png" alt="GreenPulseHub" width="75%"  >
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
<?php
include '../shared/script.php';
include '../shared/footer.php';
?>