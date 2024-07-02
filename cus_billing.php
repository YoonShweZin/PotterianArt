<?php
session_start();
include 'DBConnect.php';
$c="";
$e="";
$p="";
$ctry="";
$cty="";
$a="";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art>Customer Register Page</title>
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
	height: 700px;
	background-color: #E5E4E2;
	margin: auto;
	border-style: double;
	border-width: 3px;
	border-color: brown;
	padding-top: 20px;
	padding-left: 20px;
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

input[type=Email]
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

p
{
	font-size: 18px;
	text-align: center;
	font-weight: bold;
}

</style>
	
</head>
<body>

		<!--  start logo link-->

		<div class="logo">
		<a href="index.php" >
		<img src="images/logo.png" width="100%" height="100px" class="imgcorner"></a>		
		</div>
	
		
		<!--  end logo link-->

		<!-- start sign -in form  (post method go with name)-->
		<div class="form">
			<form method="post" action="">

		    <label for="cname">Customer Name</label>
		    <input type="text" id="cname" name="cname" required="required" placeholder="Your Customer name.." value="<?php $c?>">
		    <br><br>

		 	<label for="email">Enter Email</label>
		    <input type="Email" id="email" name="email" placeholder="Enter Email.." value="<?php $e?>"required="required" >
		    <br><br>

		    <label for="phone">Enter Phone no</label>
		    <input type="text" id="phone" name="phone" placeholder="Enter Phone no.." value="<?php $p?>"required="required">
		    <br><br>

		    <label for="ctry">Enter Country </label>
		    <input type="text" id="ctry" name="country" placeholder="Enter Country.." value="<?php $ctry?>" required="required"><br><br>

		    <label for="cty">Enter City </label>
		    <input type="text" id="cty" name="city" placeholder="Enter City.." value="<?php $cty?>" required="required" ><br><br>

		    <label for="add">Enter Shipping Address </label>
		    <input type="text" id="add" name="address" placeholder="Enter Shipping Address.." value="<?php $a?>"required="required"><br><br>

			
			
		    <input type="submit" id="submit" name="submit" value="Confirm"><br><br><br>
			</form>

			Finish filling information then choose : &nbsp;&nbsp; <a href="payment.php" style="color: black">Payment</a>			
		</div>

<?php 

    if(isset($_POST['submit']))
    {
        $c=$_POST["cname"];
        $e=$_POST["email"];
        $p=$_POST["phone"];
        $ctry=$_POST["country"];
        $cty=$_POST["city"];
        $a=$_POST["address"];

    try 
    {
       
        #insert data into person table
        $sql = "INSERT INTO customer(cname,email,phone,country, city,shi_address)
        VALUES('$c','$e','$p','$ctry','$cty','$a')";
        $conn->exec($sql);
    } 
    catch (Exception $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
     }
?>
</body>
</html>