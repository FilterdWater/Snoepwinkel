<?php
require_once('db.inc.php');
$con = getDBConnection();
?>

<?php
$pagetitle = 'Winkelmand | CandyPop';
require_once 'head.php';
?>

<body>
    <div class="bg-white">
        <?php require_once 'navbar.php'; ?>

        <section class="text-black mt-8">
            <div class="container px-5 pt-24 pb-12 mx-auto">
                <h2 class="text-2xl font-medium mb-4 outline rounded p-3">Winkelmand</h2>

                <?php
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            $cartItems = $_SESSION['cart'];


                            foreach ($cartItems as $item) {
                                // Get product details based on the item's productId
                                $product = getProductDetails($con, $item['productId']);

                                // Display product information
                                echo '<div class="rounded-lg p-4 m-auto mb-6 outline outline-cyan-700">';
                                echo '  <div class="h-24 w-auto overflow-hidden flex">';
                                echo '    <img alt="product" class="object-contain h-auto w-32" src="' . $product['picture'] . '">';
                                echo '  </div>';
                                echo '  <div class="mt-5">';
                                echo '    <h2 class="text-xl font-medium title-font text-gray-900">' . $product['name'] . '</h2>';
                                echo '    <p class="text-sm leading-relaxed mt-2">' . $product['description'] . '</p>';
                                echo '    <p class="text-base leading-relaxed mt-2">€' . $product['price'] . '</p>';
                                echo '    <form method="post" action="remove_from_winkelmand.php">';
                                echo '      <input type="hidden" name="item_id" value="' . $item['productId'] . '">';
                                echo '      <div class="text-white bg-green-500 rounded w-44 py-2 px-4 mt-3 font-bold">Hoeveelheid = '.$item['orderAmount'].'</div>';
                                echo '      <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-1 transition-all">Delete</button>';
                                echo '    </form>';
                                echo '  </div>';
                                echo '</div>';
                                echo '<hr class="my-6 h-0.5 border-t-0 bg-black opacity-75">';
                            }
                        } else {
                            echo '<p>Your cart is empty.</p>';
                        }
                ?>

                <div class="flex justify-center">
                    <div class=" max-w-full">
                        <div class="text-center pt-16 pr-0 sm:pr-72">
                            <div class="outline p-6 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
                                <h1 class="text-3xl font-bold text-gray-900 mb-6">Koop ze!</h1>
                                <a href="checkout.php" class="rounded-md bg-gradient-to-br from-fuchsia-900 via-fuchsia-900 to-rose-500 px-3 py-2 text-sm font-semibold text-white">Koop alle winkelmand items</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="max-w-full pt-4 pl-0 sm:pl-72">
                        <div class="text-center">
                            <div class="outline p-6 rounded-3xl outline-cyan-700 shadow-lg shadow-cyan-700">
                                <h1 class="text-3xl font-bold text-gray-900 mb-6">Dump de session data!</h1>
                                <a href="hulpje.php" class="rounded-md bg-gradient-to-br from-rose-500 via-fuchsia-900 to-fuchsia-900 px-3 py-2 text-sm font-semibold text-white">Delete alle session data</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <?php require_once 'footer.php'; ?>
    </div>
</body>

</html>
