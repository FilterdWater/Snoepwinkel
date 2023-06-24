<?php
require_once('db.inc.php');
$con = getDBConnection();

function validateFile($file) //Checkt of de foto die gestuurd well mag gestuurd worden
{
    $allowedExtensions = array('jpg', 'jpeg', 'webp');
    $maxFileSize = 1 * 1024 * 1024; // 1 MB

    $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $fileSize = $file['size'];

    if (!in_array($fileExtension, $allowedExtensions)) {
        return "Error: Only JPG, JPEG, and WEBP files are allowed.";
    }

    if ($fileSize > $maxFileSize) {
        return "Error: The file size exceeds the maximum limit.";
    }

    return null; // File validation successful
}

function processFormSubmission($con)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $detailedDescription = $_POST['detailed_description'];
        $nutritionalValue = $_POST['nutritional_value'];
        $filterCategory = $_POST['filter_category'];

        if (!isset($_FILES['picture'])) {
            echo "Error: No file uploaded.";
            return;
        }

        $file = $_FILES['picture'];

        $fileValidationResult = validateFile($file);
        if ($fileValidationResult !== null) {
            echo $fileValidationResult;
            return;
        }

        $targetDir = "images/";
        $targetFileName = uniqid() . '_' . $file['name'];
        $targetFilePath = $targetDir . $targetFileName;

        move_uploaded_file($file['tmp_name'], $targetFilePath);

        $sql = "INSERT INTO snoepjes (name, picture, price, description, detailed_description, nutritional_value, filter_category) VALUES (:name, :picture, :price, :description, :detailed_description, :nutritional_value, :filter_category)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':picture', $targetFilePath);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':detailed_description', $detailedDescription);
        $stmt->bindParam(':nutritional_value', $nutritionalValue);
        $stmt->bindParam(':filter_category', $filterCategory);

        try {
            $stmt->execute();
            echo "Data inserted successfully";
            header('Location: success-product-toevoegen.php');
            exit();
        } catch(PDOException $e) {
            echo "Error inserting data: " . $e->getMessage();
            error_log("Error inserting data: " . $e->getMessage());
        }
    }
}

processFormSubmission($con);
$con = null;
?>
