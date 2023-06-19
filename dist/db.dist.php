<?php

require_once 'db.con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);
  $naam = $_POST['naam'];
  $foto = $_POST['foto'];
  $prijs = $_POST['prijs'];
  $beschrijving = $_POST['beschrijving'];
  $filter_categorie = $_POST['filter_categorie'];

  $sql = "INSERT INTO snoep (naam, foto, prijs, beschrijving, filter_categorie) VALUES (:naam, :foto, :prijs, :beschrijving, :filter_categorie)";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':naam', $naam);
  $stmt->bindParam(':foto', $foto);
  $stmt->bindParam(':prijs', $prijs);
  $stmt->bindParam(':beschrijving', $beschrijving);
  $stmt->bindParam(':filter_categorie', $filter_categorie);

  try {
    $stmt->execute();
    echo "Data zit erin";
    header('index.html');
  } catch(PDOException $e) {
    echo "Error data zit er niet in: " . $e->getMessage();
  }
}

$conn = null;

?>