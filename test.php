<?php
session_start();
$connect = mysqli_connect("localhost", "blurred for", "security reasons", "products");

$random = rand();

{
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
        $item_quantity = $values["item_quantity"];
        $item_name = $values["item_name"];
        $item_price = $values["item_price"];
        $username = $_SESSION['username'];
        // code to insert cart item into database goes here
        $sql = "INSERT INTO orders (username, name, quantity, order_id, order_status)
 VALUES('$username', '$item_name', '$item_quantity', '$random', '1')";
        $result = mysqli_query($connect, $sql);
    }
    
    mysqli_close($connect);
    
    echo "Thank you for ordering!";
}
?>