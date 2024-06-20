<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';



$select= "SELECT * FROM `event`";
$query= mysqli_query($conn,$select);

//======== delete part =========

if(isset($_GET['delete'])){
  $event_id = $_GET['delete'];
  $delete = "DELETE FROM `event` WHERE event_id = $event_id ";
  $delete = mysqli_query($conn, $delete); 
  header('location:/grad.proj/admin/listEvent.php');
  
}


?>

<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
Events List
</h1>

<div class="container col-6 mt-3"><table class="table" >
  <thead class="text-light"  style="  background-color: #436850;" >
    <tr>
      <th scope="col"> ID</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Region</th>
      <th scope="col">Time</th>
      <th scope="col">Images</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <?php foreach($query as $data){ ?>

    <tr>
      <th scope="row"><?php echo $data['event_id'];?></th>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['details'];?></td>
      <td><?php echo $data['region'];?></td>


      <td><?php echo $data['time'];?></td>
      <td>
      <img src="upload/<?php echo $data['imageOne']; ?>"  width="50px" height="60px">
      <img src="upload/<?php echo $data['imageTwo']; ?>"  width="50px" height="60px">
      <img src="upload/<?php echo $data['imageThree']; ?>"  width="50px" height="60px">
      </td>
      <td> <a href="listEvent.php?delete=<?php echo $data['event_id'] ;?>" onclick="return confirm('Delete This Event?')" class="btn" >Delete</a>
    <hr>
    <a href="addEvent.php?edit=<?php echo $data['event_id'] ;?>"  class="btn" >Update</a>
    <td> 
    </tr>
    <?php } ?>

</table>    
</div>

<?php
include '../shared/footer.php';

?>