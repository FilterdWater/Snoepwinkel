<?php
require_once('db.inc.php');
$con = getDBConnection();

// Retrieve the product ID from the URL parameter
if (isset($_GET['id'])) {
    $productID = $_GET['id'];

    // Fetch the product details from the database
    $product = getProductDetails($con, $productID);
} else {
    // If no product ID is provided, redirect back to the candy page or show an error message
    header('Location: candy.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> | CandyPop</title>
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
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap">
                    <div class="p-4 md:w-1/2">
                        <div class="rounded-lg h-64 w-72 overflow-hidden">
                            <img alt="product" class="object-cover object-center h-auto w-52" src="<?php echo $product['picture']; ?>">
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5"><?php echo $product['name']; ?></h2>
                        <p class="text-base leading-relaxed mt-2"><?php echo $product['description']; ?></p>
                        <button type="button" class="mt-6 text-white bg-gradient-to-r from-rose-700 via-rose-500 to-rose-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 shadow-lg shadow-rose-500/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all">+ Add to cart</button>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once 'footer.php'; ?>
    </div>
</body>

</html>
