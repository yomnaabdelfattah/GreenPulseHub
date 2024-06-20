<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';


$event_id=$_GET["event_id"];
$select= "SELECT * FROM `event` WHERE event_id =$event_id   ";
$query= mysqli_query($conn,$select);
$event = mysqli_fetch_assoc($query);

?>

<?php foreach($query as $select){ ?>

<h1 class="text-center mt-3  diplay-2" style="color:#0e6800;">
<?php echo $event['name'];?></h1>
<div class="container">
  <div class="row">

    <div class="col">
    <p><strong>Details:</strong> <?php echo $event['details'];?> </p>
    </div>

    <div class="col">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $event['imageOne']; ?>" alt="First image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $event['imageTwo']; ?>" alt="Second image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $event['imageThree']; ?>" alt="Third image">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
    </div>

  </div>
  <br> <br>

  <div class="row">
    <div class="col">
    <p><strong>Time:</strong><?php echo $event['time'];?></p>
    </div>

    <div class="col">
    <p><strong>Location:</strong><?php echo $event['region'];?></p>
    </div>

    <div class="col">
    <iframe src="<?php echo $event['location'];?>" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    
    </div>
    
  </div>
</div>

<?php } ?>

<br> <br>
<div class="row">
  <div class="col">
    <a href="/grad.proj/hotels/hotel.php" class="btn">Nearest hotels</a>
  </div>
  <div class="col">
    <a href="/grad.proj/hotels/transportation.php" class="btn">Nearest Means of transportations</a>
  </div>
</div>

<!-- JavaScript for automatic carousel cycling -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
  // JavaScript for automatic carousel cycling
  $('.carousel').carousel({
    interval: 2000 // Change this value to adjust the interval (in milliseconds)
  });
</script>
<?php
include '../shared/footer.php';

?>