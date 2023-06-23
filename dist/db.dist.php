<?php
require_once('db.inc.php');
$con = getDBConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $detailed_description = $_POST['detailed_description'];
  $nutritional_value = $_POST['nutritional_value'];
  $filter_category = $_POST['filter_category'];

  // Foto en foto filepath Uploaden naar db
  $targetDir = "images/";
  $fileName = $_FILES['picture']['name'];
  $targetFilePath = $targetDir . $fileName;

  // Check if uploaded file has an allowed file extension
  $allowedExtensions = array('jpg', 'jpeg', 'WEBP');
  $fileExtension = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
  if (!in_array($fileExtension, $allowedExtensions)) {
    echo "Error: Only JPG, JPEG, and WEBP files are allowed.";
    exit();
  }

  // Check file size
  $maxFileSize = 1 * 1024 * 1024; // 1 MB     1024x1024 = 1mb
  $fileSize = $_FILES['picture']['size'];
  if ($fileSize > $maxFileSize) {
    echo "Error: The file size exceeds the maximum limit.";
    exit();
  }

  move_uploaded_file($_FILES['picture']['tmp_name'], $targetFilePath);

  $sql = "INSERT INTO snoepjes (name, picture, price, description, detailed_description, nutritional_value, filter_category) VALUES (:name, :picture, :price, :description, :detailed_description, :nutritional_value, :filter_category)";
  $stmt = $con->prepare($sql);

  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':picture', $targetFilePath);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':detailed_description', $detailed_description);
  $stmt->bindParam(':nutritional_value', $nutritional_value);
  $stmt->bindParam(':filter_category', $filter_category);

  try {
    $stmt->execute();
    echo "Data inserted successfully";
    header('Location: success-product-toevoegen.php');
    exit();
  } catch(PDOException $e) {
    echo "Error inserting data: " . $e->getMessage();
  }
}

$con = null;
?>
