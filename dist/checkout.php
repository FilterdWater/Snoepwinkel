<?php
require_once('db.inc.php');
$con = getDBConnection();
?>

<?php
$pagetitle = 'Checkout | CandyPop';
require_once 'head.php';
?>

<body>
    <div class="bg-white">

        <?php
        require_once 'navbar.php';
        ?>

        <section class="pt-32 pb-12">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                <?php
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            $cartItems = $_SESSION['cart'];

                            var_dump($_SESSION);

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
                </div>

                <div>
                    <h1 class="text-2xl font-medium text-gray-900">Checkout</h1>

                    <form class="mt-8 space-y-6">
                        <div class="grid grid-cols-1 gap-4">
                            <div class="mb-4">
                            <label for="first_name" class="block text-xs font-medium text-gray-700">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                            <div class="mb-4">
                            <label for="last_name" class="block text-xs font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                            <div class="mb-4">
                            <label for="email" class="block text-xs font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                            <div class="mb-4">
                            <label for="adres" class="block text-xs font-medium text-gray-700">Address</label>
                            <input type="text" id="adres" name="adres" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                            <div class="mb-4">
                            <label for="stad" class="block text-xs font-medium text-gray-700">City</label>
                            <input type="text" id="stad" name="stad" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                            <div class="mb-4">
                            <label for="postcode" class="block text-xs font-medium text-gray-700">ZIP/Post Code</label>
                            <input type="text" id="postcode" name="postcode" class="block w-full rounded-md border-gray-200 shadow-md sm:text-sm p-3 m-4">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="mt-1 block w-full border-gray-200 shadow-md sm:text-sm p-3 m-4 text-white bg-black border border-transparent rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Pay up!
                            </button>
                        </div>
                        </form>




                </div>
            </div>
        </section>

        <?php
        require_once 'footer.php';
        ?>

    </div>
</body>

</html>
