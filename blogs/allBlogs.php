<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';

$select= "SELECT * FROM `blog`";
$query= mysqli_query($conn,$select);

?>

  <style>
    .blog-card {
      margin-bottom: 20px;
    }
    .blog-card img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>


<div class="container">
  <div class="row">
    <?php foreach($query as $data){ ?>
      <div class="col-md-4">
        <div class="blog-card">
          <img src="/grad.proj/admin/upload/<?php echo $data['image']; ?>" class="card-img-top" alt="Blog Image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['title'];?></h5>
            <a href="/grad.proj/blogs/eachBlog.php?blog_id=<?php echo $data['blog_id'];?>" class="btn">Read More</a>
          </div> 
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php
include '../shared/footer.php';

?>