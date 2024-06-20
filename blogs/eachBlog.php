<?php
ob_Start();
include '../shared/nav.php';
include '../shared/config.php';

$blog_id=$_GET["blog_id"];
$select= "SELECT * FROM `blog` WHERE blog_id=$blog_id";
$query= mysqli_query($conn,$select);
$blog = mysqli_fetch_assoc($query);


?>

<?php foreach($query as $select){ ?>

<img src="/grad.proj/admin/upload/<?php echo $blog['image']; ?>" alt="Blog Image" height="400px" width="500">

  
<div style="padding-bottom: 60px;">
<h3 style="margin:10px"><?php echo $blog['title'];?></h3>
<div style="width:60%;  margin:20px; border:  #e6e6e6 solid 1px;  ">
<h5 style="padding:15px;"><?php echo $blog['content'];?></h5>
</div>
</div>
</div>

</div>
<?php } ?>





<?php
include '../shared/script.php';

include '../shared/footer.php';

ob_end_flush();
?>