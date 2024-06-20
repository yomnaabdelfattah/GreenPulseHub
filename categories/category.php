<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';

if(isset($_GET['type'])){
    $category_id = $_GET['type'];
    $select = "SELECT * FROM `product`  where categoryId=$category_id ";
    $show = mysqli_query($conn, $select);
    }else{
        $select = "SELECT * FROM `product` ";
    $show = mysqli_query($conn, $select);
    }


?>
<head>
    <style>
        .col-4 {
    border: 1px solid #ddd; 
    padding: 15px;
    box-sizing: border-box;
    margin-bottom: 20px; 
}

.col-4 img {
    width: 240px;
        height: 300px;
        object-fit: cover;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.row .col-4 {
    flex: 1 1 21%; /* Adjust based on the number of columns you want per row */
    margin: 10px;
    box-sizing: border-box;
}

    </style>
</head>

<!-- featured products -->
<div class="small-container" style="margin: 55px;">
    
    <div class="row row2">
        <h2 style="color:#0e6800;">All Products</h2>
        <select>
            <option>Default Sorting</option>
            <option>Show By Price</option>

            
        </select>
    </div>

<div  style="margin: 80px;"></div>

    <div class="row" >
    <?php
            foreach ($show as $data) {
            ?>
        <div class="col-4" >
            <a href="product1.html"><img src="/grad.proj/admin/upload/<?php echo $data['imgOne']; ?>" ></a>
            <h5><?php echo $data['name'] ?></h5>
            <p><?php echo $data['price'] ?> EGP</p>
            <a href="/grad.proj/categories/eachproduct.php?product_id=<?php echo $data['product_id'];?>" class="btn btn-success stretched-link">Details</a>

        </div>
        <?php } ?>

            <br>
           
    </div>

    <?php
include '../shared/script.php';
include '../shared/footer.php';


 
  
?>
 