<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';

$select= "SELECT * FROM `orders`";
$query= mysqli_query($conn,$select);


if(isset($_GET['delete'])){
  $order_id = $_GET['delete'];
  $delete = "DELETE FROM `orders` WHERE order_id = $order_id ";
  $delete = mysqli_query($conn, $delete); 
  header('location:/grad.proj/admin/listOrders.php');
  
}



?>


<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
Orders List
</h1>

<div class="container col-6 mt-3"><table class="table" >
  <thead class="text-light"  style="  background-color: #436850;" >
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Product's ID</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>

      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($query as $data){ ?>

    <tr>
      <th scope="row"><?php echo $data['order_id'];?></th>
      <td><?php echo $data['userId'];?></td>
      <td><?php echo $data['productId'];?></td>
      <td><?php echo $data['price'];?></td>
      <td><?php echo $data['quantity'];?></td>

    <td> 
    <a href="listOrders.php?delete=<?php echo $data['order_id'] ;?>" onclick="return confirm('Delete This Order?')" class="btn" >Delete</a>
    <td> 
        
      </tr>
    <?php } ?>

  </tbody>
</table>    
</div>

<?php
include '../shared/footer.php';

?>