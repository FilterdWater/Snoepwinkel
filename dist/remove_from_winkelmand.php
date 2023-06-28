<?php
session_start();

if (isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];

// Verwijder het artikel uit de winkelwagen
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $cartItems = $_SESSION['cart'];
        $index = array_search($itemId, $cartItems);
        if ($index !== false) {
            array_splice($cartItems, $index, 1);
            $_SESSION['cart'] = $cartItems;
        }
    }
}

// Leid terug naar de winkelwagenpagina
header("Location: winkelmand.php");
exit();
?>
