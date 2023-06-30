<?php

define("HOST", "localhost");
define("DBNAME", "snoepwinkel");
define("USER", "root");
define("PASS", "");

function getDBConnection()
{
    try {
        $con = new PDO('mysql:host=' . HOST . ';charset=utf8;dbname=' . DBNAME, USER, PASS);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Caught exception: ' . $e->getMessage() . "\n";
    }

    return $con;
}

function getProducts($con)
{
    $products = array();

    $query = $con->prepare("SELECT * FROM snoepjes");
    $query->execute();

    while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
        $products[] = $rows;
    }

    return $products;
}

function getProductDetails($con, $productID)
{
    $query = $con->prepare("SELECT * FROM snoepjes WHERE id = :id");
    $query->bindParam(':id', $productID);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}

function getAdmin($con)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST["login"])) {
            if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
                $message = '<label>All fields are required</label>';
            } else {
                $query = "SELECT * FROM users WHERE username = :username AND email = :email AND password = :admin_password";
                $statement = $con->prepare($query);
                $statement->execute(array(
                    'username' => $_POST["username"],
                    'email' => $_POST["email"],
                    'password' => $_POST["password"]
                ));
                $count = $statement->rowCount();
                if ($count > 0) {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["password"] = $_POST["password"];
                    header('Location: index.php');
                    exit();
                } else {
                    $message = '<label>Username or Password is wrong</label>';
                }
            }
        }
    }
}

?>
