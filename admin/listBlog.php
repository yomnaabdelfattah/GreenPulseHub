<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';



$select= "SELECT * FROM `blog`";
$query= mysqli_query($conn,$select);


//======== delete part =========

if(isset($_GET['delete'])){
  $blog_id = $_GET['delete'];
  $delete = "DELETE FROM `blog` WHERE blog_id = $blog_id ";
  $delete = mysqli_query($conn, $delete); 
  header('location:/grad.proj/admin/listBlog.php');
  
}


?>

<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
Events List
</h1>

<div class="container col-6 mt-3"><table class="table" >
  <thead class="text-light"  style="  background-color: #436850;" >
    <tr>
      <th scope="col"> ID</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($query as $data){ ?>

    <tr>
      <th scope="row"><?php echo $data['blog_id'];?></th>
      <td><?php echo $data['title'];?></td>
      <td><?php echo $data['content'];?></td>
       <td> <img src="upload/<?php echo $data['image']; ?>"  width="50px" height="60px"> </td>

    <td>
    <a href="listBlog.php?delete=<?php echo $data['blog_id'] ;?>" onclick="return confirm('Delete This Blog?')" class="btn" >Delete</a>
    <hr>
    <a href="addBlog.php?edit=<?php echo $data['blog_id'] ;?>"  class="btn" >Update</a>
    <td> 
        
      </tr>
    <?php } ?>

  </tbody>
</table>    
</div>

<?php
include '../shared/footer.php';

?>