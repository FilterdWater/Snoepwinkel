<?php

require_once ('db.inc.php');
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
       
        <?php
        
        require_once 'header.php';
        
        ?>

<section class="text-gray-600 body-font mt-8">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

<?php

$products = getProducts($con);

foreach($products as $product){

    echo '<div class="p-4 md:w-1/3 sm:mb-0 mb-6">';
    echo '<div class="rounded-lg h-64 w-72 overflow-hidden">';
    echo '<img alt="product" class="object-cover object-center h-aut w-52"  src="'.$product['picture'].'">';
    echo '</div>';                    
    echo '<h2 class="text-xl font-medium title-font text-gray-900 mt-5">' . $product['name'] . '</h2>';
    echo '<p class="text-base leading-relaxed mt-2">' . $product['description'] . '</p>';
    echo '<button type="button" class="mt-6 text-white bg-gradient-to-r from-rose-400 via-rose-500 to-rose-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 dark:focus:ring-rose-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">+ Add to cart</button>';
    echo '</div>';
}



?>
    </div>
    </div>
</section>









        <?php
        
            require_once 'footer.php';

        ?>



</body>

</html> 