<?php
include 'DBConnect.php';
$retrieveQuery= "Select * from product";
$stmt= $conn-> query($retrieveQuery); //result s
$resultSet= $stmt -> fetchAll();
session_start();
 if(isset($_SESSION["cart"]))
 {
        $id = 0;
        $q = 0;
 }
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $flag=false;
    $id =$_POST['pid'];
    $q = $_POST['qty'];
    foreach ($_SESSION['cart']as $k=>$v)//k is key v is value
    {
        if ($k==$id)
        {
            $flag =true;
            $v+=$q;
            $_SESSION['cart'][$k]=$v;
            echo "<br> ID $id is".$v. "qty updated";
            break;
        }
    }
    if ($flag==false)
    {
        $_SESSION['cart'][$id]=$q;
        echo "<br> ID $id is".$_SESSION ['cart']['$id']. "qty updated";
    }
}
?>
    <html>
    <head><title></title></head>
    <body>
    <h2>Potterian Art</h2>
<?php
    include 'DBConnect.php';
    $viewquery="select * from product";    
    echo "<table border='1'>";
    echo "<tr><th>PID</th><th>Name</th><th>Category</th><th>Price</th><th>Instock</th><th>Images</th><th>Quantity</th>
            <th>Buy</th></tr>";
    foreach ($conn -> query($viewquery) as $row)
    {
        echo "<tr>";
        echo "<td>".$row['pid']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['category']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['instock']."</td>";
        echo "<td> <img src='earthenware/".$row['image']."' width = '100px' height='100px'></td>";
        echo "<form action='' method='post'>";
        $pid =$row ['pid'];
        echo "<td><input type='hidden' name='pid' value='$pid'</td>";
        echo "<td><input type='number' name='qty' size='20' min='0' ></td>";
        echo "<td><input type='submit' name='submit' value='Add to Cart'></td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
?>
<form action="checkout.php" method="post"></form>
<input type="submit" name="submit" value="Checkout">
</form>
</body>
</html>
