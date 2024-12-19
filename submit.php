<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = htmlspecialchars(trim($_POST['productName']));
    $productCategory = htmlspecialchars(trim($_POST['productCategory']));
    $productPrice = htmlspecialchars(trim($_POST['productPrice']));
    $productQuantity = htmlspecialchars(trim($_POST['productQuantity']));

    
    if (!empty($productName) && !empty($productCategory) && is_numeric($productPrice) 
    && is_numeric($productQuantity)) {
        $response = "<h2>Registered Product Details:</h2>";
        $response .= "<p><strong>Product Name:</strong> " . $productName . "</p>";
        $response .= "<p><strong>Category:</strong> " . $productCategory . "</p>";
        $response .= "<p><strong>Price:</strong> $" . number_format((float)
        $productPrice, 2, '.', '') . "</p>";
        $response .= "<p><strong>Quantity:</strong> " . $productQuantity . "</p>";

    
        echo $response;
    }
}
?>