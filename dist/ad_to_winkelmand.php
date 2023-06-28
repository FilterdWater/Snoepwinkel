<?php
$pagetitle = 'ad-to-winkelmand | CandyPop';
require_once 'head.php';
?>



        <?php

        if (isset($_POST['productId'])) {
            $productId = $_POST['productId'];

            // als cart niet bestaat maak er een 
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            //voeg product toe
            $_SESSION['cart'][] = $productId;
        }

        // Redirect naar winkelmand
        header("Location: winkelmand.php");
        exit();
        ?>



</body>

</html>