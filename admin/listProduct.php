<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';

$select = "SELECT product.*, categories.name AS catName
 FROM product 
 INNER JOIN categories ON product.categoryId = categories.category_id ";
$query = mysqli_query($conn, $select);

if(isset($_GET['delete'])){
  $product_id = $_GET['delete'];
  $delete = "DELETE FROM `product` WHERE product_id = $product_id";
  $delete = mysqli_query($conn, $delete); 
  header('location:/grad.proj/admin/listProduct.php');
}
?>

<h1 class="text-center mt-3 display-2" style="color:#0e6800;">Products List</h1>

<div class="container col-6 mt-3">
  <table class="table">
    <thead class="text-light" style="background-color: #436850;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Details</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Images</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <?php foreach($query as $data){ ?>
      <tr>
        <th scope="row"><?php echo $data['product_id'];?></th>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['details'];?></td>
        <td><?php echo $data['catName'];?></td>
        <td><?php echo $data['price'];?> EGP</td>
        <td>
          <img src="upload/<?php echo $data['imgOne']; ?>" alt="..." width="50px" height="60px">
          <img src="upload/<?php echo $data['imgTwo']; ?>" alt="..." width="50px" height="60px">
          <img src="upload/<?php echo $data['imgThree']; ?>" alt="..." width="50px" height="60px">
        </td>
        <td>
          <a href="listProduct.php?delete=<?php echo $data['product_id']; ?>" onclick="return confirm('Delete This product?')" class="btn">Delete</a>
          <hr>
          <a href="addProduct.php?edit=<?php echo $data['product_id']; ?>" class="btn">Update</a>
        </td>
      </tr>
    <?php } ?>
  </table>    
</div>

<?php
include '../shared/footer.php';
?>
