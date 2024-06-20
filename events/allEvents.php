<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';


$select= "SELECT * FROM `event`";
$query= mysqli_query($conn,$select);

?>


<div class="container-fluid mt-5 ml-5">
  <div class="row">
    <?php foreach ($query as $data) { ?>

      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="/grad.proj/admin/upload/<?php echo $data['imageOne']; ?>" class="card-img-top" alt="event image">
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['name']; ?></h5>
            <a href="/grad.proj/events/eachEvent.php?event_id=<?php echo $data['event_id'];?>" class="btn btn-primary">
              Details
            </a>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
</div>
<?php
include '../shared/footer.php';

?>

