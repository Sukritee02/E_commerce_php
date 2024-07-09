<?php
// Uncomment to suppress error reporting
// error_reporting(0);

try {
    // Establish database connection
    $connection = mysqli_connect('localhost', 'root', '', 'ecom');
    $selectQuery = "SELECT * FROM proddet";
    $result = mysqli_query($connection, $selectQuery);
    $users = [];

    if (mysqli_num_rows($result) == 0) {
        echo "";
    } else {
        // Fetch data from the database
        while ($user = mysqli_fetch_assoc($result)) {
            array_push($users, $user);
        }
    }
} catch (Exception $ex) {
    echo "Database Error: " . $ex->getMessage();
}
?>