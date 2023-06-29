<?php
$pagetitle = 'ad-to-winkelmand | CandyPop';
require_once 'head.php';

if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $orderAmount = $_POST['orderamount'];

    // if cart does not exist, create one
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // add product to cart
    $cartItem = array(
        'productId' => $productId,
        'orderAmount' => $orderAmount
    );
    $_SESSION['cart'][] = $cartItem;
}

// Redirect to winkelmand
header("Location: winkelmand.php");
exit();
?>
</body>
</html>