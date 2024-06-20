<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';


$select="SELECT * FROM `user`";
$query= mysqli_query($conn,$select);

if(isset($_GET['delete'])){
  $user_id = $_GET['delete'];
  $delete = "DELETE FROM `user` WHERE user_id = $user_id ";
  $delete = mysqli_query($conn, $delete); 
  header('location:/grad.proj/admin/listUser.php');
  
}

?>
<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
Users List
</h1>

<div class="container col-6 mt-3"><table class="table" >
  <thead class="text-light"  style="  background-color: #436850;" >
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
     <th scope="col">Address</th>
     <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
        foreach($query as $data){ ?>
    <tr>
      
      <td><?php echo $data['user_id'];?></td>
      <td><?php echo $data['fname'];?></td>
      <td><?php echo $data['lname'];?></td>
      <td><?php echo $data['email'];?></td>
      <td><?php echo $data['phone'];?></td>
      <td><?php echo $data['address'];?></td>
      <td> <a href="listUser.php?delete=<?php echo $data['user_id'] ;?>" onclick="return confirm('Delete This User?')" class="btn btn-danger" >Delete</a><td> 
      
    </tr>
    <?php } ?>
    
  </tbody>
</table>


</div>

<?php
include '../shared/script.php';
include '../shared/footer.php';
?>


