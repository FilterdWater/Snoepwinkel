<?php
require_once('db.inc.php');
$con = getDBConnection();

    // Haal de product-ID op uit de URL-parameter
if (isset($_GET['id'])) {
    $productID = $_GET['id'];

    // Haal de productdetails op uit de database
    $product = getProductDetails($con, $productID);
} else {
    // Als er geen product-ID wordt opgegeven, ga dan terug naar de snoep-pagina of geef een foutmelding weer
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
                        <p class="text-sm leading-relaxed mt-2"><?php echo $product['price']; ?></p>
                        <?php
                        echo '      <form method="post" action="ad_to_winkelmand.php">';
                        echo '        <input type="hidden" name="productId" value="' . $product['id'] . '">';
                        echo '        <button type="submit" class="text-white bg-gradient-to-r from-rose-700 via-rose-500 to-rose-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 shadow-lg shadow-rose-500/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 transition-all">+ Add to cart</button>';
                        echo '      </form>';               
                        ?>
                     </div>
                </div>
            </div>
        </section>

        <?php require_once 'footer.php'; ?>

    </div>
</body>

</html>
