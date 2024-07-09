<?php
// Uncomment to suppress error reporting
// error_reporting(0);

try {
    // Establish database connection
    $connection = mysqli_connect('localhost', 'root', '', 'ecom');
    $insertsql = "INSERT INTO proddet (prodname, image, price, quantity) 
    VALUES ('$prodname', 'img/products/f1.jpg', $price, $quantity)";

    mysqli_query($connection, $insertsql);
} catch (Exception $ex) {
    echo "Database Error: " . $ex->getMessage();
}
?>