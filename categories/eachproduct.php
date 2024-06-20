<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';

$product = null;
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $select = "SELECT * FROM `product` WHERE product_id = $product_id";
    $query = mysqli_query($conn, $select);
    $product = mysqli_fetch_assoc($query);
}

if (isset($_POST['buy'])) {
    $product_id = $_GET['product_id'];
    $show = "SELECT * FROM `product` WHERE `product_id`='$product_id'";
    $zxc = mysqli_query($conn, $show);
    $row = mysqli_fetch_array($zxc);
    $prodPrice = $row['price'];
    $prodQuan = $_POST['quantity'];
    $sum = $prodPrice * $prodQuan;
    $user_id = $_SESSION['user_id'];
    $insert = "INSERT INTO `cart` VALUES (NULL, '$prodPrice', '$product_id', '$user_id', $prodQuan)";
    $query1 = mysqli_query($conn, $insert);

    if ($query1) {
        header('location:/grad.proj/cart/cart.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<body>
    <div class="container" style="margin: 80px;">
        <div class="row">
            <!-- Carousel on the left -->
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php if ($product): ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $product['imgOne']; ?>" alt="First image" width="250px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $product['imgTwo']; ?>" alt="Second image" width="250px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/grad.proj/admin/upload/<?php echo $product['imgThree']; ?>" alt="Third image" width="250px" height="350px">
                        </div>
                        <?php endif; ?>
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

            <!-- Product details on the right -->
            <div class="col-md-6">
                <?php if ($product): ?>
                <h3 class="card-title"><?php echo $product['name']; ?></h3>
                <p class="card-text"><?php echo $product['price']; ?> EGP</p>
                <p class="card-text"><?php echo $product['details']; ?></p>

                <form method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10">
                    <button type="submit" class="btn btn-primary" name="buy">Add to Cart</button>
                </form>
                <?php else: ?>
                <p>Product not found.</p>
                <?php endif; ?>

                <hr>
                <div>
                    <p>Related Products
                        <a href="#" style="text-decoration: underline; color: #0e6800;">View More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php
include '../shared/script.php';
include '../shared/footer.php';
?>
</body>
