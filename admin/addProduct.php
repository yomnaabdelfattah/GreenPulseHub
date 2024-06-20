<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/admin.php';


$name = $details = $price = $category_id = $imageOne = $imageTwo = $imageThree = '';
$update = false;

// Handle the edit case
if (isset($_GET['edit'])) {
    $update = true;
    $product_id = $_GET['edit'];
    $select = "SELECT * FROM `product` WHERE product_id=$product_id";
    $s = mysqli_query($conn, $select);
    if ($s && mysqli_num_rows($s) > 0) {
        $row = mysqli_fetch_assoc($s);
        $name = $row['name'];
        $details = $row['details'];
        $price = $row['price'];
        $category_id = $row['categoryId'];
        $imageOne = $row['imgOne'];
        $imageTwo = $row['imgTwo'];
        $imageThree = $row['imgThree'];
    }
}

// Handle the update case
if (isset($_POST['update'])) {
    $product_id = $_GET['edit'];
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $category_id = $_POST['categoryId'];

    // Handle image uploads if new files are provided
    if (!empty($_FILES['imgOne']['name'])) {
        $imageOne = $_FILES['imgOne']['name'];
        $imagetmp = $_FILES['imgOne']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmp, $location . $imageOne);
    } else {
        $imageOne = $row['imgOne']; // Keep existing image
    }

    if (!empty($_FILES['imgTwo']['name'])) {
        $imageTwo = $_FILES['imgTwo']['name'];
        $imagetmpp = $_FILES['imgTwo']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmpp, $location . $imageTwo);
    } else {
        $imageTwo = $row['imgTwo']; // Keep existing image
    }

    if (!empty($_FILES['imgThree']['name'])) {
        $imageThree = $_FILES['imgThree']['name'];
        $imagetmppp = $_FILES['imgThree']['tmp_name'];
        $location = "upload/";
        move_uploaded_file($imagetmppp, $location . $imageThree);
    } else {
        $imageThree = $row['imgThree']; // Keep existing image
    }

    $update = "UPDATE `product` SET name='$name', details='$details', price='$price', categoryId='$category_id', imgOne='$imageOne', imgTwo='$imageTwo', imgThree='$imageThree' WHERE product_id=$product_id";
    $i = mysqli_query($conn, $update);

    header('location:/grad.proj/admin/listProduct.php');
}

// Handle the create case
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $category_id = $_POST['categoryId'];

    $imageOne = $_FILES['imgOne']['name'];
    $imagetmp = $_FILES['imgOne']['tmp_name'];
    $imageTwo = $_FILES['imgTwo']['name'];
    $imagetmpp = $_FILES['imgTwo']['tmp_name'];
    $imageThree = $_FILES['imgThree']['name'];
    $imagetmppp = $_FILES['imgThree']['tmp_name'];
    $location = "upload/";

    move_uploaded_file($imagetmp, $location . $imageOne);
    move_uploaded_file($imagetmpp, $location . $imageTwo);
    move_uploaded_file($imagetmppp, $location . $imageThree);

    $insert = "INSERT INTO `product` VALUES (NULL, '$name', '$category_id', '$details', '$price', '$imageOne', '$imageTwo', '$imageThree')";
    $i = mysqli_query($conn, $insert);
    header('location:/grad.proj/admin/listProduct.php');
}
?>

<div class="col-4" style="margin: 0 auto; width: fit-content;">
    <h1 style="text-align: center; color:#0e6800;"><?php echo $update ? 'Edit Product' : 'Add Product'; ?></h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="">Product Name</label>
        <input type="text" placeholder="Product name" name="name" value="<?php echo $name ?>" required>
        <label for="">Product Details</label>
        <textarea placeholder="Product details" name="details" required style="height: 150px; width:385px"><?php echo $details ?></textarea>
        <label for="">Product Price</label>
        <input type="text" placeholder="product price" name="price" value="<?php echo $price ?>" required>

        <label for="categories">Category:</label>
        <select id="categories" name="categoryId">
            <?php
            $select = "SELECT * FROM categories";
            $s = mysqli_query($conn, $select);
            foreach ($s as $data) { ?>
                <option value="<?php echo $data['category_id'] ?>" <?php echo $data['category_id'] == $category_id ? 'selected' : '' ?>><?php echo $data['name'] ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="exampleInputEmail1">Product Image</label> 
        <?php if ($update): ?>
            <?php if (!empty($imageOne)): ?>
                <img src="../admin/upload/<?php echo $imageOne; ?>" alt="Current Image One" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imgOne" class="custom-file__input">

            <?php if (!empty($imageTwo)): ?>
                <img src="../admin/upload/<?php echo $imageTwo; ?>" alt="Current Image Two" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imgTwo" class="custom-file__input">

            <?php if (!empty($imageThree)): ?>
                <img src="../admin/upload/<?php echo $imageThree; ?>" alt="Current Image Three" style="max-width: 100%; height: auto;"><br>
            <?php endif; ?>
            <input type="file" name="imgThree" class="custom-file__input">
        <?php else: ?>
            <input type="file" name="imgOne" class="custom-file__input" required>
            <input type="file" name="imgTwo" class="custom-file__input" required>
            <input type="file" name="imgThree" class="custom-file__input" required>
        <?php endif; ?>

        <button type="submit" class="btn" name="<?php echo $update ? 'update' : 'send'; ?>"><?php echo $update ? 'Update' : 'Add'; ?></button>
    </form>
</div>

<?php
include '../shared/footer.php';
?>
