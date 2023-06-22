<?php

define("HOST", "localhost");
define("DBNAME", "snoepwinkel");
define("USER", "root");
define("PASS", "");

function getDBConnection(){
    try{
        $con = new PDO('mysql:host='.HOST.';charset=utf8;dbname='.DBNAME,USER,PASS);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

    return $con;
}


function getProducts($con){
    $products = array();

    $query = $con->prepare("SELECT * FROM snoepjes");
    $query->execute();

    while($rows = $query->fetch(PDO::FETCH_ASSOC)){
        $products[] = $rows;
    }

    return $products;
}
