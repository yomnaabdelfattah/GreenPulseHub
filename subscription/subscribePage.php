<?php
ob_start();

include '../shared/nav.php';
include '../shared/config.php';
include '../auth/user.php';

?>

    <h1 style="color:#0e6800;">Subscribe to our Plan</h1>
    <form method="post" action="checkout.php">
        <p>Enjoy Free delivery for a year!</p>
        <p><strong>499 EGP</strong></p>

        <button class="btn" style="width: 150px;">Subscribe</button>
    </form>

<?php
include '../shared/footer.php';
?>