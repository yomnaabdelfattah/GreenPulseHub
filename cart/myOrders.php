<?php
ob_start();
include '../shared/nav.php';
include '../shared/config.php';
include '../auth/user.php';


$user_id= $_SESSION['user_id'];

$select = " SELECT * FROM `orders` where userId=$user_id ";
$s = mysqli_query($conn, $select);

?>
    <style>
    /* Custom styles */
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center mb-4">My Orders</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Products</th>

            <th>Quantity</th>
            <th>Total</th>
          </tr>
          <?php
          $select = "SELECT product.name, product.price,  orders.order_id, orders.price, orders.quantity
          FROM `orders`
          INNER JOIN product ON orders.productID=product.product_id";
                        
            $s = mysqli_query($conn, $select);
            foreach ($s as $data) {
                $sum = $data['price'] * $data['quantity'];
            ?>
        </thead>
        <tbody>
          <tr>
          <td><?php echo $data['order_id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['quantity']; ?></td>
            <td><?php echo $data['price']; ?></td>
          </tr>
          <?php } ?>
          <tr>  
          

        </tbody>
      </table>
    </div>
  </div>
  
  <?php
include '../shared/footer.php';

?>