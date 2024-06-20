<?php
ob_start();
include '../shared/config.php';
include '../shared/nav.php';

$searched = $_GET["searched"];

$select      = "SELECT * FROM `product`  WHERE product.name LIKE '%$searched%'";
$selectQuery = mysqli_query($conn, $select);
$numRows     = mysqli_num_rows($selectQuery);


?> 

<h2 class="text-center my-5">Search Results</h2>

<div class="container">
    <div class="displayedBooks row m-auto">
    <?php foreach($selectQuery as $selected){ ?>
    <div class="bookImage mx-auto mt-5">
            <img style="width:250px; height: 300px;"src="/grad.proj/admin/upload/<?php echo $selected["imgOne"];?>" alt=""></a>
            <p class="text-center bookInfo">Name: <?php echo $selected["name"] ?></p>
            <p class="text-center bookInfo">Price: <?php echo $selected["price"]; ?> EGP</p>
            <hr>
            <a href="/grad.proj/categories/eachproduct.php?product_id=<?php echo $selected["product_id"]; ?>" class="btn">Go to the product</a>


    </div>
    <?php } ?>
    </div>
    <?php if($numRows < 1){ ?>
        <div><h3 class="text-center outOfStock">No search reuslts found.</h3></div>
    <?php } ?>
</div>

<?php include '../shared/footer.php'; ?>


