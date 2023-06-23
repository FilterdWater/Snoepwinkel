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

<?php
$pagetitle = 'Snoep-details | CandyPop';
require_once 'head.php';
?>

<body>
    <div class="bg-white">

        <?php require_once 'navbar.php'; ?>

        <section class="text-black mt-8">
            <div class="container px-5 pt-24 pb-12 mx-auto">
                <div class="flex flex-wrap justify-evenly">
                    <div class="rounded-lg p-4 m-auto mb-6 outline outline-cyan-700 mx-6">
                        <div class="h-64 w-auto overflow-hidden flex">
                            <img alt="product" class="object-contain h-auto w-auto" src="<?php echo $product['picture']; ?>">
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <h2 class=" text-2xl font-medium  my-5"><?php echo $product['name']; ?></h2>
                        <p class="text-base leading-relaxed  mt-2"><?php echo $product['description']; ?></p>
                        <p class="text-sm leading-relaxed mt-2"><?php echo $product['detailed_description']; ?></p>
                        <button type="button" class="mt-6 text-white bg-gradient-to-r from-rose-700 via-rose-500 to-rose-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 shadow-lg shadow-rose-500/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all">+ Add to cart</button>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once 'footer.php'; ?>

    </div>
</body>

</html>
