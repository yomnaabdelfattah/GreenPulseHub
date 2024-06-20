<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/user.php';

$user_id = $_SESSION['user_id'];

if (isset($_POST['checkOut'])) {
    $select = "SELECT * FROM cart WHERE userID='$user_id'";
    $check = mysqli_query($conn, $select);
    $rows = mysqli_num_rows($check);
    while ($rows > 0) {
        $show = mysqli_fetch_array($check);
        $cart_id = $show['cart_id'];
        $price = $show['price'];
        $productID = $show['productID'];
        $userID = $show['userID'];
        $quantity = $show['quantity'];

        $insert = "INSERT INTO `orders` VALUES (NULL, $price, $userID, $productID, $quantity)";
        $query = mysqli_query($conn, $insert);
        $del = "DELETE FROM cart WHERE userID=$user_id";
        $qu = mysqli_query($conn, $del);
        // Display confirmation message
        echo "<script>alert('Order confirmed!'); window.location.href='myOrders.php';</script>";
        $rows--;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM cart WHERE cart_id=$id";
    mysqli_query($conn, $delete);
}

// Include the user table in the query
$select = "SELECT product.name, cart.productID, cart.quantity, cart.price, cart.cart_id, product.imgOne
           FROM cart
           INNER JOIN product ON cart.productID = product.product_id
           WHERE cart.userID = '$user_id'";
$s = mysqli_query($conn, $select);
?>

<body>
    <form id="checkoutForm" action="cart.php" method="post">
        <div class="container col-10 mt-5">
            <table class="table bg-light table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $totprice = 0;
                foreach ($s as $data) {
                ?>
                    <tr>
                        <td><?php echo $data['productID']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><img src="/grad.proj/admin/upload/<?php echo $data['imgOne']; ?>" alt="Product Image" width="50" height="50"></td>
                        <td><?php echo $data['price']; ?></td>
                        <td><?php echo $data['quantity']; ?></td>
                        <td>
                            <a href="cart.php?delete=<?php echo $data['cart_id']; ?>" class="btn btn-danger">Delete</a>
                            <?php
                            $totprice += $data['price'] * $data['quantity'];
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="6" style="text-align: right;"><b>Total Price:</b> <?php echo $totprice; ?> EGP</td>
                </tr>
            </table>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <button type="submit" class="btn btn-outline-success" name="checkOut" onclick="return confirmOrder()">Confirm Order</button>
        </div>
    </form>

    <script>
        function confirmOrder() {
            return confirm('Are you sure you want to confirm this order?');
        }
    </script>
</body>

<?php include '../shared/footer.php'; ?>
<?php include '../shared/script.php'; ?>
