<?php
include 'DBConnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art>Admin Sign_in Page</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
	/*Logo*/

.logo
{
	width: 13%;
	height:100px;
	margin: auto;
	margin-bottom: 20px;
}

/*create form*/
.form
{
	width: 35%;
	height: 340px;
	background-color: #E5E4E2;
	margin: auto;
	border-style: double;
	border-width: 3px;
	border-color: brown;
	padding-top: 20px;
	padding-left: 20px;
}

p
{
	font-size: 18px;
	text-align: right;
	font-weight: bold;
	margin-right: 420px;
}

input[type=text]
 {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid brown;
  font-size: 15px;
  font-family: serif;
}
label
{
	font-size: 16px;
	font-family: serif;
	font-weight: bold;
}
input[type=Password]
{
	width: 95%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: none;
	border-bottom: 2px solid brown;
	font-size: 15px;
	font-family: serif;
}

input[type=submit]
{
	width: 35%;
	margin-left: 30%;
	font-size: 18px;
	font-family: serif;
	background-color: white;
	border-color: sienna;
	border-style: double;
	box-shadow:  2px 3px #888888;
}


a
{
	font-size: 16px;
	color: brown;
	font-style: oblique;
	font-weight: bold;
}
a:hover
{
	text-shadow:2px 2px 8px #504A4B; 
	font-family:serif; 
}
	</style>
</head>
<body>
		<div class="logo">
		<a href="index.php" >
		<img src="images/logo.png" width="100%" height="100px" class="imgcorner"></a>
		</div>
		<p>Pay with PayPal</p>

			<div class="form">

			<form method="post" action="">

		    <label for="card_name">Name on Card</label>
		    <input type="text" id="name" name="card_name" placeholder="Name on Card.." required="required">
		    <br><br>

		    <label for="paycard_id">Card Number</label>
		    <input type="text" id="paycard_id" name="paycard_id" placeholder="1234-1234-1234-1234" required="required">
		    <br><br>
		    
		    <label for="email">Card Register email</label>
		    <input type="text" id="email" name="email" placeholder="Card Register email" required="required">
		    <br><br>

		    <input type="submit" name="submit" value="Confirm"><br><br><br>
		     </form>
		     </div>
		
<?php 

    if(isset($_POST['submit']))
    {
        
        include 'DBConnect.php';
        $n=$_POST["card_name"];
        $i=$_POST["paycard_id"];
        $e=$_POST["email"];

    try 
    {
        #insert data into payment table
        $sql = "INSERT INTO `payment` (card_name, paycard_id,email)
        VALUES('$n','$i','$e')";
        $conn->exec($sql);
        echo '<script>alert("Your order have been Placed")</script>';
    } 
    catch (Exception $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
     }
?>

<?php 
if (isset($_POST['submit']))
      {
        $oid = $conn->lastInsertId();
        $oid=$oid;
    
        if(isset( $_SESSION['shopping_cart'][0]))
        {
            echo "ok<br>";
        }
        else
        {
            echo "not ok<br>";
        }
        
        $pid = $_SESSION['shopping_cart'][0]["item_id"];
        $qty = $_SESSION['shopping_cart'][0]["item_quantity"];
//        $price = $_SESSION['shopping_cart'][0]["item_price"];  
        $cid=$_SESSION["cid"];
        $cname=$_SESSION["cname"];
        $payment=$_SESSION["payment"];
        $n=$_POST["card_name"];
                
 //       $paymentAmount=$qty*$price;
        
        
        $sql = "INSERT INTO `order`(`oid`, `cid`, `cname`, `pid`, `id`, `qty`, `payment`, `card_name`, `order_date`)
                            VALUES ($oid ,$cid,'$cname', $pid,'Ad11',$qty,$payment,'$n',now())";
        echo $sql;
        $conn->exec($sql);
        session_destroy();                   
    }
?>
</body>
</html>