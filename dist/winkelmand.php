<?php
require_once('db.inc.php');
$con = getDBConnection();
?>

<?php
$pagetitle = 'WinkelMand | CandyPop';
require_once 'head.php';
?>

<body>
    <div class="bg-white">

    <?php
    ?>

    
<body>
    <div class="bg-white">
        <?php require_once 'navbar.php'; ?>

        <section class="text-black mt-8">
            <div class="container px-5 pt-24 pb-12 mx-auto">
                <h2 class="text-2xl font-medium mb-4  outline rounded p-3">winkelmand</h2>

                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $cartItems = $_SESSION['cart'];

                    foreach ($cartItems as $itemId) {
                        // Haal de productdetails op op basis van de item-ID
                        $product = getProductDetails($con, $itemId);

                        // Geef de productinformatie weer
                        echo '<div class="rounded-lg p-4 m-auto mb-6 outline outline-cyan-700 ">';
                        echo '  <div class="h-64 w-auto overflow-hidden flex ">';
                        echo '    <img alt="product" class="object-contain h-auto  w-64" src="' . $product['picture'] . '">';
                        echo '  </div>';
                        echo '  <div class="mt-5">';
                        echo '    <h2 class="text-2xl font-medium title-font text-gray-900">' . $product['name'] . '</h2>';
                        echo '    <p class="text-base leading-relaxed mt-2">' . $product['description'] . '</p>';
                        echo '    <p class="text-base leading-relaxed mt-2">' . $product['price'] . '</p>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Your cart is empty.</p>';
                }
                ?>

            <div class="flex justify-start">
                <div class="max-w-xs">
                    <div class="text-left pt-16">
                    <div class="outline p-6 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">Koop ze!</h1>
                        <a href="checkout.php" class="rounded-md bg-gradient-to-br from-fuchsia-900 via-fuchsia-900 to-rose-500 px-3 py-2 text-sm font-semibold text-white">Koop alle winkelmand items</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="max-w-xs pt-4">
                    <div class="text-left">
                    <div class="outline p-6 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
                        <h1 class="text-3xl font-bold text-gray-900 mb-6">Dump ze!</h1>
                        <a href="hulpje.php" class="rounded-md bg-gradient-to-br from-rose-500 via-fuchsia-900 to-fuchsia-900 px-3 py-2 text-sm font-semibold text-white">Delete alle winkelmand items</a>
                    </div>
                    </div>
                </div>
            </div>

        </section>

        <?php require_once 'footer.php'; ?>
    </div>
</body>

</html>




    <?php
    require_once 'footer.php';
    ?>


</body>

</html>