<?php
$id = $_GET['id'];
error_reporting(0);
try{
    $connection = mysqli_connect('localhost','root','','ecom');
    $insertsql = "delete from proddet where id=$id";
    mysqli_query($connection,$insertsql);
    if(mysqli_affected_rows($connection) == 1){
        header('location:cart.php');
    } else {
        echo "";
    }
}catch(Exception $ex){
    echo "Database Error: " . $ex->getMessage();
}
?>