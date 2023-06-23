<?php
require_once('db.inc.php');
$con = getDBConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CandyPop</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <script defer src="mobile-menu.js"></script>
</head>

<body>
    <div class="bg-white">
        <?php require_once 'header.php'; ?>

        <section class="text-gray-600 body-font mt-8">
            <div class="container py-24 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 justify-evenly">
                    <?php
                    $products = getProducts($con);

                    foreach ($products as $product) {
                        echo '<div class="rounded-lg p-4 m-auto mb-6 outline outline-cyan-700  mx-6">';
                        echo '  <div class="h-64 w-auto overflow-hidden flex ">';
                        echo '    <img alt="product" class="object-contain h-auto  w-64" src="' . $product['picture'] . '">';
                        echo '  </div>';
                        echo '  <div class="mt-5">';
                        echo '    <h2 class="text-2xl font-medium title-font text-gray-900">' . $product['name'] . '</h2>';
                        echo '    <p class="text-base leading-relaxed mt-2">' . $product['description'] . '</p>';
                        echo '    <div class="mt-6">';
                        echo '      <button type="button" class="text-white bg-gradient-to-r from-rose-700 via-rose-500 to-rose-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 shadow-lg shadow-rose-500/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all">+ Add to cart</button>';
                        echo '    </div>';
                        echo '    <div class="mt-2">';
                        echo '      <a href="snoep-details.php?id=' . $product['id'] . '" class="text-white bg-gradient-to-r from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-fuchsia-300 shadow-lg shadow-fuchsia-500/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all">View Details</a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }                                                        
                    ?>
                </div>
            </div>
        </section>

        <?php require_once 'footer.php'; ?>
    </div>
</body>

</html>
