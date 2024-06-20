<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';


$select="SELECT review.review_id, review.content, CONCAT(user.fname, ' ', user.lname) AS full_name 
FROM review
INNER JOIN user ON review.userId = user.user_id";


$query= mysqli_query($conn,$select);


?>

<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
Reviews List
</h1>

<div class="container col-6 mt-3"><table class="table" >

  <thead class="text-light"  style="  background-color: #436850;" >
    <tr>
      <th scope="col"> ID</th>
      <th scope="col">content</th>
      <th scope="col">User's Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach($query as $data){ ?>

    <tr>
      <th scope="row"><?php echo $data['review_id'];?></th>
      <td><?php echo $data['content'];?></td>
      <td><?php echo $data['full_name'];?></td>
    <td> <a href="listReviews.php?delete=<?php echo $data['review_id'] ;?>" onclick="return confirm('Delete This Review?')" class="btn" >Delete</a><td> 
    <?php } ?>
   </tr>
  </tbody>
</table>    
</div>

<?php
include '../shared/footer.php';

?>