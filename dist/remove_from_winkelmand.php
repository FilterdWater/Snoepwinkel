<?php
session_start();

if (isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];

    // Remove the item from the shopping cart
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $cartItems = $_SESSION['cart'];

        // Find the index of the item in the cart
        $index = false;
        foreach ($cartItems as $key => $item) {
            if ($item['productId'] == $itemId) {
                $index = $key;
                break;
            }
        }

        // Remove the item from the cart if found
        if ($index !== false) {
            array_splice($cartItems, $index, 1);
            $_SESSION['cart'] = $cartItems;
        }
    }
}

// Terug naar de winkelmand
header("Location: winkelmand.php");
exit();
?>
