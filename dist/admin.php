<?php
session_start();

if (!isset($_SESSION["username"]) || !isset($_SESSION["email"]) || !isset($_SESSION["password"])) {
    header("Location: login.php");
    exit();
}

$pagetitle = 'Admin Page | CandyPop';
require_once 'head.php';
?>

<body>
    <div class="bg-white">
        <?php
        require_once 'navbar.php';
        ?>

        <!-- Your admin page content goes here -->

        <?php
        require_once 'footer.php';
        ?>
    </div>
</body>
</html>
